<div>
    <table class="table">
        <thead class="">
            <tr class="">
                <th>No.</th> 
                <th>User</th>
                <th>Book</th>
                <th>Rent Date</th>
                <th>Return Date</th>
                <th>Actual Return Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rentlog as $item)

                @php
                    $rowClass = '';
                    if ($item->actual_return_date) {
                        $rowClass = $item->return_date < $item->actual_return_date ? 'text-bg-danger' : 'text-bg-success';
                    }
                @endphp
            <tr class="{{ $rowClass }}">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->user ? $item->user->username : 'User Banned' }}</td>
                <td>{{ $item->book ? $item->book->title : 'Book Deleted' }}</td>
                <td>{{ $item->rent_date }}</td>
                <td>{{ $item->return_date }}</td>
                <td>{{ $item->actual_return_date ?? 'Belum dikembalikan' }}</td>

            </tr>
            @endforeach

        </tbody>
    </table>
</div>