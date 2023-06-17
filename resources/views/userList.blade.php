<table class=" ">
    <thead>
      <th>Username</th>
      <th>Orders</th>
      <th>Balance</th>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
          <td>{{$user->name ?? 'imran'}} </td>
          <td>{{$user->purchases ?? 'no'}} </td>
          <td>{{$user->balance?? ''}} </td>
        </tr>
        @endforeach
    </tbody>
</table>