@extends('layout.v_template')
@section('title','Tugas 2')

@section('content')
<h1>Hasil deret bilangan</h1>
    <p>Selisih = {{$selisih}}</p>
    <table>
        <thhead>
            <tr>
                <td>Index</td>
                <td>Value</td>
            </tr>
        </thead>
        <tbody>
            @foreach($deret as $key=>$val)
                <tr>
                    <td>{{$key}}</td>
                    <td>{{$val}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection