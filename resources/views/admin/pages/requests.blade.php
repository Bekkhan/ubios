@extends('admin.layout.layout')

@section('main')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Имя</th>
                        <th>Номер</th>
                        <th>Тип транспорта</th>
                        <th>Дата регистрации</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Имя</th>
                        <th>Почта</th>
                        <th>Тема</th>
                        <th>Текст</th>
                        <th>Дата регистрации</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($requests as $request)
                        <tr >
                            <td>{{$request->name}}</td>
                            <td>{{$request->email}}</td>
                            <td>{{$request->subject }}</td>
                            <td>{{$request->text}}</td>
                            <td>{{$request->created_at}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
