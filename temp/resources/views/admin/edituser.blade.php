<div class="column displaybox">
    @include('admin.navprofile')
    <nav class="breadcrumb has-arrow-separator profileback breadcrumbcss" aria-label="breadcrumbs">
        <ul>
            <li><a href="/admin">Admin</a></li>
            <li class="is-active"><a href="/profile">Edit User</a></li>
        </ul>
    </nav>
    <div class="columns is-mobile is-centered">
        <div class="column is-half">
    @include('layouts.errors') @if(session()->has('message'))
            <div class="notification is-success">
                <button class="delete"></button>
                <h1 class="is-size-7"><b> {{ session()->get('message') }}</b></h1>
            </div>
            @endif
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
                    $notification = $delete.parentNode;
                    $delete.addEventListener('click', () => {
                        $notification.parentNode.removeChild($notification);
                    });
                });
            });
        </script>
    </div>
    <div class="card cardmargin">
        <div class="containerx" style="padding: 0 10% 0 10%;">
            <h1 class="title has-text-centered">Edit User - {{$user->name}}</h1>
            <form action="/admin/user/edit" method="post" enctype="multipart/form-data">
              @csrf
              <div class="field">
                  <label class="label">Id</label>
                  <p class="control has-icons-left">
                    <input class="input" type="text" value="{{$user->id}}" placeholder="Your Name" name="id" readonly>
                    <span class="icon is-small is-left">
                      <i class="fas fa-user"></i>
                    </span>
                  </p>
                </div>
              <div class="field">
                <label class="label">Name</label>
                <p class="control has-icons-left">
                  <input class="input" type="text" value="{{$user->name}}" placeholder="Your Name" name="name">
                  <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                  </span>
                </p>
              </div>
              <div class="field">
                  <label class="label">Email</label>
                <p class="control has-icons-left">
                  <input class="input" type="email" value="{{$user->email}}" placeholder="Your Email" name="email">
                  <span class="icon is-small is-left">
                    <i class="fas fa-at"></i>
                  </span>
                </p>
              </div>
              <div class="field">
                  <label class="label">Description (Max 100 Words)</label>
                <p class="control has-icons-left">
                  <input class="input" type="text" value="{{$user->description}}" placeholder="Your Description (Max 100 Words)" name="descrption">
                  <span class="icon is-small is-left">
                        <i class="fas fa-address-card"></i>
                    </span>
                </p>
          </div>
          <div class="field">
              <label class="label">NIC</label>
            <p class="control has-icons-left">
              <input class="input" type="text" value="{{$user->NIC}}" placeholder="NIC" name="nic">
              <span class="icon is-small is-left">
                <i class="fas fa-id-badge"></i>
              </span>
            </p>
          </div>
          <div class="field">
              <label class="label">Address</label>
            <p class="control has-icons-left">
              <input class="input" type="text" value="{{$user->address}}" placeholder="Address" name="address">
              <span class="icon is-small is-left">
                <i class="fas fa-location-arrow"></i>
              </span>
            </p>
          </div>
          <div class="field">
              <label class="label">City</label>
            <p class="control has-icons-left">
              <input class="input" type="text" value="{{$user->city}}" placeholder="City" name="city">
              <span class="icon is-small is-left">
                <i class="fas fa-thumbtack"></i>
              </span>
            </p>
          </div>
          <div class="field">
              <label class="label">Gender</label>
            <div class="control has-icons-left">
              <div class="select">
              <select name="gender">
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
              </select>
              <span class="icon is-small is-left">
                <i class="fas fa-venus-mars"></i>
              </span>
          </div>
        </div>
        </div>
        <div class="field">
              <label class="label">Phone No</label>
            <p class="control has-icons-left">
              <input class="input" type="text" value="{{$user->phoneNo}}" placeholder="Phone No" name="phoneno">
              <span class="icon is-small is-left">
                <i class="fas fa-phone-volume"></i>
              </span>
            </p>
          </div>
          <div class="field">
              <label class="label">Avatar</label>
              <div class="column image is-128x128"><img class="is-rounded" src="/uploads/avatars/{{$user->avatar}}" /></div>
              <input  class="input" type="file" name="avatar" value="{{$user->avatar}}">
            </div>
          <div class="field">
            <p class="control has-text-centered">
              <button type="submit" class="button is-success">
                    <span class="buttonspace">Save</span>
              </button>
            </p>
          </div>
          </form>
        </div>
    </div>
</div>
<br>
<br>
</div>