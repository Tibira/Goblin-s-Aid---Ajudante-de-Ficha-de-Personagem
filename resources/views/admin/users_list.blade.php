@extends('adminlte::page')

@section('content_header')
    
<div class='col-sm-11'>
        <h2>Usuários</h2>
    </div>
    
    <div class="col-sm-12">
        <table class="table table-striped">
        <thead>
        <tr>
          <th>Código</th>
          <th>Nome</th>
          <th>E-mail</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
              <td>{{$user->id}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop   
