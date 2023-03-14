@extends('dashboard.dashboard')

@section('content')
    <table>
        <thead>
        <tr>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($filters as $filter)
            <tr>
                <td>
                    <a href="{{ route('filters.edit', $filter) }}">{{ $filter->name }}</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection