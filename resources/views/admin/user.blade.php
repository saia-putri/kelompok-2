@extends('admin.mainapps')
@section('title')
@endsection
@section('content')
    <section id="blog">
        <div class="container mb-5 mt-5">

            <table class="table">
                <thead>
                    <a href="/register" class="btn bg-btn mb-2">Tambahkan User</a>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Email</th>
                        <th scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $user)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->jabatan }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="/edituser/{{ $user->id }}" class="btn bg-btn">edit</a>
                                <a href="/deleteuser/{{ $user->id }}" class="btn bg-btn">delete</a>
                                <a href="/" class="btn bg-btn">detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </section>
@endsection
