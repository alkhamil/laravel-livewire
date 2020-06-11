<section class="section">
    <div class="section-header">
        <h1>User</h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                @if (Session::has('msg'))
                    <div class="alert alert-success">{{ Session::get('msg') }}</div>
                @endif
                <a href="{{ route('user.create') }}" class="btn btn-primary mb-2">
                    <i class="fa fa-plus"></i> Create New
                </a>
                <div class="card">
                    <div class="card-header">
                        <h4>Advanced Table</h4>
                        <div class="card-header-form">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" wire:model="search" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Created</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $u)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $u->name }}</td>
                                            <td>{{ $u->email }}</td>
                                            <td>{{ $u->password }}</td>
                                            <td>{{ $u->created_at }}</td>
                                            <td>
                                                <a href="{{ route('user.edit', $u->id) }}" class="btn btn-sm btn-info">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <button wire:click="destroy({{ $u->id }})" class="btn btn-sm btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</section>