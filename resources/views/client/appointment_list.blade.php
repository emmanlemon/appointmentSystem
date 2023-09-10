@include('components.format.header')
<title>Appointment List</title>
<div class="container min-vh-100 mt-2">
    <div class="title">Appointment List</div>
    @if(Session::has('msg'))
    <div class="alert alert-success mt-2">{{ Session::get('msg') }}</div>
    @elseif(Session::has('delete'))
    <div class="alert alert-danger mt-2">{{ Session::get('delete') }}</div>
    @endif
    @forelse ($appointments as $appointment => $client)
<table class="table mt-2">
    <thead>
      <tr>
        <th colspan="12" class="bg-info">Doctor Name: {{ $appointment }}</th>
      </tr>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Birthdate</th>
        <th scope="col">Gender</th>
        <th scope="col">Address</th>
        <th scope="col">Email</th>
        <th scope="col">Contact #</th>
        <th scope="col">Date & Time</th>
        <th scope="col">Status</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
    @php $count = 1; @endphp
      @foreach ($client as $row)
      <tr>
        <th>{{ $count++ }}</th>
        <td>{{ $row->full_name }}</td>
        <td>{{ $row->date_of_birth }}</td>
        <td>{{ $row->gender }}</td>
        <td>{{ $row->address }}</td>
        <td>{{ $row->email }}</td>
        <td>{{ $row->contact_number }}</td>
        <td>{{ $row->date }} {{ $row->time }}</td>
        <td>{{ $row->status === '1' ? 'APPROVED' : 'PENDING'}}</td>
        <td colspan="2>
            <div>
                <button class="btn btn-success">Edit</button>
            </div>
            <form action='{{ route('appointment.destroy' , $row->id) }}' method="post">
                    <input class="btn btn-danger" type="submit" value="Delete" />
                    @method('delete')
                    @csrf
            </form>
        </td>
      </tr>
     @endforeach
    </tbody>
  </table>
    @empty
      <span class="p-5">No Appointment found.</span>
    @endforelse
</div>
@include('components.format.footer')
