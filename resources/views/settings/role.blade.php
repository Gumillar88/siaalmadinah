@extends('layouts.main')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style type="text/css">
  .select2-container--default .select2-selection--single {
    /*border: 2px solid #fe901d;*/
    border-top: none;
    border-right: none;
    border-left: none;
    width: 100%;
    border-radius: 0;
    padding: 0;
  }
  .select2 {
    padding: 0;
    width: 100%;
  }
</style>
<div class="col-md-6">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title ">ROLE</h4>
      <p class="card-category"> Create</p>
    </div>
    <div class="card-body">
      <form action="" method="POST">
        <div class="row">
          <div class="col-md-12">
            <label class="bmd-label-floating">Role</label>
            <div class="form-group">
              <select name="user_id" class="select2 form-control">
                <option value="#">Please select role</option>
                <option value="1">Admin</option>
                <option value="2">Student</option>
                <option value="3">Teacher</option>
                <option value="5">Staff</option>
                <option value="6">Super Admin</option>
                <option value="7">Principal</option>
                <option value="8">Parent</option>
              </select>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12">
            <label class="bmd-label-floating">User</label>
            <div class="form-group">
              <select name="user_id" class="select2 form-control">
                <option value="#">Please select user</option>
                <option value="1">Jamal</option>
                <option value="2">Rendi</option>
                <option value="2">Adul</option>
              </select>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>Action</label>
              <table>
                <tr>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="" checked>
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </td>
                  <td>Manage</td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="">
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </td>
                  <td>Views</td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="">
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </td>
                  <td>Edit</td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="">
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </td>
                  <td>Delete</td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="">
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </td>
                  <td>Manage</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary pull-right">Save Role</button>
        <div class="clearfix"></div>
      </form>
    </div>
  </div>
</div>
<div class="col-md-6">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title ">ROLE</h4>
      <p class="card-category"> List table</p>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-sm">
          <thead class="text-primary">
            <th style="text-align: center; width:10%;">#</th>
            <th style="text-align: center; width:30%;">Users</th>
            <th style="text-align: center; width:30%;">Role</th>
            <th style="text-align: center; width:30%;">Aksi</th>
          </thead>
          <tbody>
            <tr>
              <td style="text-align: center;">1</td>
              <td style="text-align: center;">Jamal</td>
              <td style="text-align: center;">Admin</td>
              <td style="text-align: center;">
                <span>
                  <a class="fs-15"><i class="ri-edit-2-line"></i></a>
                  <a class="fs-15"><i class=" bx bx-trash"></i></a>
                </span>
              </td>
            </tr>
            <tr>
              <td style="text-align: center;">2</td>
              <td style="text-align: center;">Rendi</td>
              <td style="text-align: center;">Admin</td>
              <td style="text-align: center;">
                <span>
                  <a class="fs-15"><i class="ri-edit-2-line"></i></a>
                  <a class="fs-15"><i class=" bx bx-trash"></i></a>
                </span>
              </td>
            </tr>
            <tr>
              <td style="text-align: center;">3</td>
              <td style="text-align: center;">Adul</td>
              <td style="text-align: center;">Teacher</td>
              <td style="text-align: center;">
                <span>
                  <a class="fs-15"><i class="ri-edit-2-line"></i></a>
                  <a class="fs-15"><i class=" bx bx-trash"></i></a>
                </span>
              </td>
            </tr>
            <tr>
              <td style="text-align: center;">4</td>
              <td style="text-align: center;">Gilang</td>
              <td style="text-align: center;">Student</td>
              <td style="text-align: center;">
                <span>
                  <a class="fs-15"><i class="ri-edit-2-line"></i></a>
                  <a class="fs-15"><i class=" bx bx-trash"></i></a>
                </span>
              </td>
            </tr>
            <tr>
              <td style="text-align: center;">4</td>
              <td style="text-align: center;">Marcel</td>
              <td style="text-align: center;">Parent</td>
              <td style="text-align: center;">
                <span>
                  <a class="fs-15"><i class="ri-edit-2-line"></i></a>
                  <a class="fs-15"><i class=" bx bx-trash"></i></a>
                </span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('.select2').select2();
  });
</script>
@endsection