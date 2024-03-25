<div class="modal fade" id="productModal{{ $phonedet->id }}" tabindex="-1" aria-labelledby="productModalLabel{{ $phonedet->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content p-4 rounded">
                            <div class="modal-header">
                                <h2 class="modal-title" id="productModalLabel{{ $phonedet->id }}" style="font-family: 'Poppins', sans-serif;">{{ $phonedet->phone_name }}</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="text-start mt-5">
                                                <img src="{{ asset('/img/'.$phonedet->image) }}" alt="Product Image" style="max-height: 600px; display: block; margin: auto;">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mt-3" style="font-family: 'Poppins', sans-serif;">
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Price:</th>
                                                            <td>₱ {{ $formatted_price }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Size:</th>
                                                            <td>{{ $phonedet->size }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Color:</th>
                                                            <td>{{ $phonedet->color }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Processor:</th>
                                                            <td>{{ $phonedet->processor }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">RAM:</th>
                                                            <td>{{ $phonedet->ram }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Storage Capacity:</th>
                                                            <td>{{ $phonedet->storage }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Camera:</th>
                                                            <td>{{ $phonedet->camera }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Display:</th>
                                                            <td>{{ $phonedet->display }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="{{ route('edit.product', ['id' => $phonedet->id]) }}" class="btn btn-secondary " style="font-family: 'Poppins', sans-serif;">Edit</a>
                                <a href="{{ url('delete_phone/'.$phonedet->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete Phone</a>
                            </div>

                        </div>
                    </div>
                </div>