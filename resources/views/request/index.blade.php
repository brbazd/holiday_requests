<x-layout>

    <table>
        <tr>
            <th>fullname</th>
            <th>email</th>
            <th>reason</th>

        </tr>
        @foreach($requests as $request)
            <tr>
                <td>{{$request->full_name}}</td>
                <td>{{$request->email}}</td>
                <td>{{$request->reason}}</td>
            </tr>
        @endforeach
    </table>
</x-layout>
