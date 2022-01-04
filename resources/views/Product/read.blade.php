<div class="row">
    <div class="col">
        <div class="card">
             <!-- Card header -->
             <div class="card-header d-flex border-0 dark justify-content-between">
                    <h3 class="mb-0">Data Produsen</h3>
                    <button class="btn btn-success" onclick="create()">Add Product</button>
              </div>
              <div class="table-responsive text-center">
                  <table class="table align-items-center table-dark table-flush">
                      <thead class="thead-dark">
                        <tr>
                        <th scope="col" class="sort" data-sort="name">Nama Product</th>
                        <th scope="col" class="sort" data-sort="price">Price</th>
                        <th scope="col" class="sort" data-sort="stok">Stok</th>
                        <th scope="col" class="sort" data-sort="desc">Desc</th>
                        <th scope="col" class="sort" data-sort="produsen">Produsen</th>
                        <th scope="col" class="sort" data-sort="perusahaan">Perusahaan</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                
                @foreach ($data as $item)
                    
                    <tbody class="list">
                        <tr>
                            <th scope="row">
                                <div class="media-body">
                                    <span class="name mb-0 text-sm">{{ $item->nama }}</span>
                                    </div>
                            </th>
                            <td class="harga">
                                {{ $item->harga }}
                            </td>
                            <td class="stok">
                                {{ $item->stok }}
                            </td>

                            <td class="desc">
                                {{ $item->desc }}
                            </td>

                            <td class="produsen ">
                                {{ $item->produsen }}
                            </td>

                            <td class="perusahaan">
                                {{ $item->perusahaan }}
                                </td>
                        <td class="text-right">
                            <div class="dropdown">
                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow text-center">
                                    <button class="dropdown-item"  onClick="edit({{ $item->id }})">Edit</button>
                                    <button class="dropdown-item"   onClick="destroy({{ $item->id }})">Delete</button>
                                </div>
                            </div>
                        </td>
                    </tbody>
                @endforeach
             </table>
            </div>
        </div>
    </div>
</div>