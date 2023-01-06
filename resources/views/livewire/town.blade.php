@section('headTitle','Towns - ')
@section('pageTitle','Towns')
<div class="row">
    <div class='col-12'>
      <!--@.add{display:flex;}-->
            <div class="d-flex justify-content-end">
              <a class="btn btn-primary" href="{{URL::to('town/add')}}" >
                <i class="fas fa-plus"></i> Add Town 
              </a>
              </div>
        <div class="card mb-4">
        
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">#</th> 
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Name</th> 
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Subcounty Name</th> 
                      <th class="align-middle text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Actions</th>  
                    </tr>
                  </thead>
                  <tbody>

                    @forelse($towns as $town)
                    <tr>
                         <td><p class="text-xs px-3 font-weight-bold mb-0">{{$town->id}}</p></td>
                         <td><p class="text-xs px-3 mb-0">{{$town->name}}</p></td>
                         <td><p class="text-xs px-3 mb-0">{{$town->subcounty->name}}</p></td>
                         <td class="align-middle text-center text-sm">
                            <a href="{{URL::to('town/edit/'.$town->id)}}">
                             <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                           
                            <a onclick="return confirm('Are you sure?')" href="{{URL::to('town/delete/'.$town->id)}}" >
                            <i class="fa-solid fa-trash"></i>
                            </a>
                         </td>
                    </tr>
                    @empty
                    <tr>
                          <td colspan="2"> No records found</td>
                    </tr>
                    @endforelse

                  </tbody>
              </table>
              <div class="pagn-links">
                 {{$towns->links()}}
              </div>
              </div>
        </div>
        </div>
    </div>
</div>

