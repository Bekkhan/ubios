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
                            <th>Почта</th>
                            <th>Откуда/Куда</th>
                            <th>Наименования груза</th>
                            <th>Выбор состава</th>
                            <th>Дата отправки</th>
                            <th>Статус</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Имя</th>
                            <th>Номер</th>
                            <th>Почта</th>
                            <th>Откуда/Куда</th>
                            <th>Наименования груза</th>
                            <th>Выбор состава</th>
                            <th>Дата отправки</th>
                            <th>Статус</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    @foreach($feedbacks as $feed)
                        <tr @if($feed->status) bgcolor="#a9ff98" @endif>
                            <td>{{$feed->name}}</td>
                            <td>{{$feed->phone}}</td>
                            <td>{{$feed->email ?? "-"}}</td>
                            <td>{{($feed->source_point ." - ". $feed->destination)  ?? '-'}}</td>
                            <td>{{$feed->package_name ?? '-'}}</td>
                            <td>{{$feed->contains}}</td>
                            <td>{{$feed->date}}</td>
                            <td><a href="{{route("admin.status", $feed->id)}}">{{ ($feed->status) ? 'Принят' : "В обработке" }}</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
