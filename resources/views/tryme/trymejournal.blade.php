@extends('layout.app')

@section('content')
    <div class="container mt-5">
        <div class="col pt-5">
            <div>
                <h2 class="text-center">My Journals</h2>
            </div>
            <table class="table">
                <thead class="thead-dark text-center">
                    <tr>
                        <th scope="col">Journal No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Content</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>12-05-2024</td>
                        <td>
                            <button class="btn btn-primary">See Journal</button>
                            <button class="btn btn-warning">Edit Journal</button>
                            <button class="btn btn-danger">Delete Journal</button>
                        </td>
                    </tr>
                    {{-- <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>12-05-2024</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>12-05-2024</td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    @endsection
</div>
