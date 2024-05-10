@extends('layout.app')

@section('content')
    @vite("resources/css/trymejournal.css")
    <div class="mt-5">
        <div class="col-12 pt-5">
            <div class="row">
                <div class="col-10">
                </div>
                <div class="col-2">
                    <button class="btn btn-primary">Write/Add new Journal</button>
                </div>
            </div>
            <div>
                <h2 class="text-center">My Journals</h2>
            </div>
            <table class="table">
                <thead class="thead-dark text-center">
                    <tr>
                        <th scope="col" class="col-1">Journal No</th>
                        <th scope="col" class="col-2">Title</th>
                        <th scope="col" class="col-4">Content</th>
                        <th scope="col" class="col-2">Date</th>
                        <th scope="col" class="col-3">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <th scope="row" class="col-1">1</th>
                        <td class="col-2 text-truncate">Mark</td>
                        <td class="col-4 text-truncate">dsfsafsdfsaffdsdafsdfsdfsadfsdafsadfdsfsdafdsafasfdsfsdfsadfLoremipsusdofksaonvwokdjndfsfsdfsdfasvoksnvmoknsamlkvnm;dclkvcnmsa;oidfnewao;ifnoifnceoisanfco;senfikosedsdfsfsdfsdfsdfsavcxvxssdfsfsfsfnfva;osfvewsifnawosfnoinio</td>
                        <td class="col-2 text-truncate">12-05-2024</td>
                        <td class="col-3 text-truncate">
                            <button class="btn btn-secondary">See Journal</button>
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
