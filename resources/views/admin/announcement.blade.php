@include('layout')
@include('components.molecule.admin.addCarousel')
@include('components.molecule.admin.addAnnouncement')
@extends('components.format.sidebarNavigation')
<title>Admin Announcement</title>
@section('sideBarNavigation')
<section class="home-section">
   <div class="title"><span>Maintenance</span></div>
   <div class="container">
    @if(Session::has('delete'))
    <div class="alert alert-danger">{{ Session::get('delete') }}</div>
    @elseif(Session::has('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    <div class="title"><span>Announcement</span>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addAnnouncementModal">Add Announcement +</button>
    </div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Picture</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Link</th>
            <th scope="col">Created At</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @php $count = 1; @endphp
          @forelse($announcements as $announcement)
          <tr>
            <th>{{ $count++ }}</th>
            <td><img src="{{ asset("images/announcement/$announcement->image") }}" alt="" height="200px" width="200px"></td>
            <td>{{ $announcement->title }}</td>
            <td>{{ $announcement->description }}</td>
            <td><a href="{{ $announcement->link }}" target="blank">{{ $announcement->link }}</a></td>
            <td>{{ $announcement->created_at }}</td>
            <td colspan="2">
              <div>
                  <button class="btn btn-success">Edit</button>
              </div>
              <form action='{{ route('announcement.destroy' , $announcement->id) }}' method="post">
                <input class="btn btn-danger" type="submit" value="Delete" />
                @method('delete')
                @csrf
            </form>
            </td>
          </tr>
          @empty
            <tr>
                <td colspan="7">No Announcement found.</td>
            </tr>
          @endforelse
        </tbody>
      </table>

      <div class="title"><span>
        Carousel List</span>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCarouselModal">Add Carousel +</button>
    </div>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Picture</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @php $count = 1; @endphp
              @forelse($carousels as $carousel)
              <tr>
                <th>{{ $count++ }}</th>
                <td><img src="{{ asset("images/carousel/$carousel->image") }}" alt="" height="200px" width="200px"></td>
                <td>{{ $carousel->title }}</td>
                <td>{{ $carousel->description }}</td>
                <td>{{ $carousel->created_at }}</td>
                <td colspan="2">
                  <div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editDoctorModal">Edit</button>
                </div>
                  <form action='{{ route('carousel.destroy' , $carousel->id) }}' method="post">
                          <input class="btn btn-danger" type="submit" value="Delete" />
                          @method('delete')
                          @csrf
                  </form>
                </td>
              </tr>
              @empty
                <tr>
                    <td colspan="7">No Carousel found.</td>
                </tr>
              @endforelse
            </tbody>
          </table>
   </div>
</section>
@endsection
