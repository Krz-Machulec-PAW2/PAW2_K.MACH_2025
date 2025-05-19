<x-layout>

    @section('title','Lista osób:')
    
    @section('content')
    
    <section>
        <header class="main">
            <h1>Lista użytkowników:</h1>
        </header>

        <div class="table-wrapper">
            <table>
                <thead><tr> 
                    <th>Login</th>
                    <th>Email</th>
                    <th>Uprawnienia</th>    
                </tr></thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->Login }}</td>
                            <td>{{ $user->Email }}</td>
                            <td>{{ $user->role->Role_name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </section>
    
    @endsection
    </x-layout>