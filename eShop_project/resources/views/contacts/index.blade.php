<x-layout-admin>
    <h3 style="text-align: center;">Contacts</h3>
    <a href="{{ route('contacts.contact') }}">Add new</a>
    @if ($contact->count() > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Created at</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contact as $ct)
                    <tr>
                        <td>{{ $ct->name }}</td>
                        <td>{{ $ct->email }}</td>
                        <td>{{ $ct->message }}</td>
                        <td>{{ $ct->create_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Not found</p>
    @endif
</x-layout-admin>
