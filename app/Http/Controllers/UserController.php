<?php


namespace App\Http\Controllers;

    use Illuminate\Support\Facades\Storage;
    use App\Models\User;
    use App\Models\Role;
    use Illuminate\Http\Request;

    class UserController extends Controller
    {
        private function authorizeUserUpdate(User $user) 
        {
            return auth()->user()->id === $user->user_id;
        }

        public function index()
        {
            if (!auth()->check()) {
                return redirect('/login');
            }
            $users = User::paginate(10); // 10 items per page
            
            return view('admin.users.index', compact('users'));
        }

        // Show the form for creating a new parameter
        public function create()
        {
            return view('admin.users.create');
        }

        // In progress
        public function store(Request $request)
        {
            // return redirect()->route('parameters.index')->with('success', Auth::id());
            // Validate and store a new parameter
            $incomingFields = $request->validate([
                'name' => 'required|string|max:255|unique:parameters,name,',
                'email' => 'required|email',
            ]);

            $incomingFields['user_name'] = strip_tags($incomingFields['name']);
            $incomingFields['user_email'] = strip_tags($incomingFields['email']);

            User::create([
                'name' => $incomingFields['user_name'],
                'email' => $incomingFields['user_email'],
            ]);
            

            return redirect()->route('users.index')->with('success', 'User created successfully.');
        }
    
        
        public function edit(User $user)
        {
            if (!auth()->check()) {
                return redirect('/login');
            }

            return view('livewire.manage-users', ['roles' => Role::all()],compact('user'));
        }
    
        public function update(Request $request, User $user)
        {
            // return redirect()->route('parameters.index')->with('success', $request->role);
            // Validate and update the parameter
            $request->validate([
                'name' => 'required|string|max:255|unique:parameters,name,' . $user->id,
                'email' => 'required|email',
            ]);

            $user->assignRole($request->role);

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
    
            return redirect()->route('users.index')->with('success', 'User updated successfully.');
        }
    
        public function destroy(User $user)
        {
            if ($this->authorizeUserUpdate($user)){
                if ($user->image) {
                    Storage::disk('public')->delete($user->image);
                }

                $user->delete();
            }

            // Delete the user
            return redirect()->route('users.index')->with('success', 'User deleted successfully.');
        }

}