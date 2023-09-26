@include('components.format.header')
<title>Appointment List</title>
<div class="container min-vh-100 mt-2">
    <div class="h-25 w-100 p-4" style="background-image:url({{ asset('images/appointment.jpeg') }}); background-size: 100% 250px; background-repeat: no-repeat;">
        <p class="p-0 m-0" style="font-size: 40px; text-shadow:2px 2px 2px white;">SCHEDULE YOUR</p>
        <p class="p-0 m-0" style="font-size: 40px; text-shadow:2px 2px 2px white;">APPOINTMENT TODAY</p>
    </div>
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
        <td>{{ date('F j, Y', strtotime($row->date_of_birth))}}</td>
        <td>{{ $row->gender }}</td>
        <td>{{ $row->address }}</td>
        <td>{{ $row->email }}</td>
        <td>{{ $row->contact_number }}</td>
        <td>{{ date('F j, Y', strtotime($row->date)) }} {{ date('g:i a', strtotime($row->time)) }}</td>
        <td><span class="{{ $row->status === '1' ? 'bg-success' : 'bg-primary'}} px-2 py-1 m-1 text-white rounded">{{ $row->status === '1' ? 'APPROVED' : 'PENDING'}}</span></td>
        <td colspan="2" class="col">
            <div class="d-flex gap-1 justify-content-between">
                <div>
                    <button class="btn btn-success" data-toggle="modal" data-target="#editAppointmentModal{{ $row->id }}" data-id="{{ $row->id }}">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </button>
                    @include('components.molecule.client.editAppointment')
                </div>
                <div>
                    <form action="{{ route('appointment.destroy', $row->id) }}" method="post">

                        <button class="btn btn-danger" type="submit">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>  @csrf
                        @method('delete')
                    </form>
                </div>
            </div>
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
