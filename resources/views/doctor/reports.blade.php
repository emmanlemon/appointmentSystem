@extends('components.format.sidebarNavigation')
<title>Reports Doctor</title>
@section('sideBarNavigation')
<section class="home-section">
   <div class="title"><span>
   Reports List</span>
</div>
<div class="container">
   @if(Session::has('msg'))
       <div class="alert alert-success">{{ Session::get('msg') }}</div>
   @endif
   <table class="table table-striped">
       <thead>
         <tr>
           <th scope="col">#</th>
           <th scope="col">Full Name</th>
           <th scope="col">Phone Number</th>
           <th scope="col">Prefered Date and Time</th>
           <th scope="col">Email</th>
           <th scope="col">Status</th>
         </tr>
       </thead>
       <tbody>
        @php $count = 1; @endphp
         @forelse($appointmentreports as $appointment)
         <tr>
          <th>{{ $count++ }}</th>
          <td>{{ $appointment->first_name }} {{ $appointment->middle_name }} {{ $appointment->last_name }}</td>
           <td>{{ $appointment->contact_number }}</td>
           <td>{{ $appointment->date }} {{ $appointment->time }}</td>
           <td>{{ $appointment->email }}</td>
           <td>{{ $appointment->status }}</td>
         </tr>
         @empty
           <tr>

           </tr>
         @endforelse
       </tbody>
     </table>
     {{-- <div class="d-flex justify-content-end"> {{ $appointmentreports->links() }}</div> --}}
</div>
</section>
@endsection