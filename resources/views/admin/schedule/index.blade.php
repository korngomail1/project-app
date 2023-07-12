<x-app-layout>
    <table class="table table-sm table-striped table-bordered table-hover">
        <thead>
            <tr class="info thead-bg">
                <th class="text-center">ID</th>
                <th class="text-center">user_id</th>
                <th class="text-center">User Name</th>
                <th class="text-center">Origin Url</th>
                <th class="text-center">Short Url</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($link as $item)
            <tr>
                <td class="text-center">{{$item->id}}</td>
                <td class="text-center">{{$item->user_id}}</td>
                <td>{{$item->username}}</td>
                <td>{{$item->destination_url}}</td>
                <td>{{$item->default_short_url}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
