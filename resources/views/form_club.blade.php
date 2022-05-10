@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Rgístra tu Club') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('crear_club') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">{{ __('Nombre del Club') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="provincia" class="col-md-4 col-form-label text-md-end">{{ __('Província') }}</label>
                            <div class="col-md-6">
                                <select required name="provincia" class="form-control">
                                    <option value="">Elige Provincia</option>
                                    <option value="Álava/Araba">Álava/Araba</option>
                                    <option value="Albacete">Albacete</option>
                                    <option value="Alicante">Alicante</option>
                                    <option value="Almería">Almería</option>
                                    <option value="Asturias">Asturias</option>
                                    <option value="Ávila">Ávila</option>
                                    <option value="Badajoz">Badajoz</option>
                                    <option value="Baleares">Baleares</option>
                                    <option value="Barcelona">Barcelona</option>
                                    <option value="Burgos">Burgos</option>
                                    <option value="Cáceres">Cáceres</option>
                                    <option value="Cádiz">Cádiz</option>
                                    <option value="Cantabria">Cantabria</option>
                                    <option value="Castellón">Castellón</option>
                                    <option value="Ceuta">Ceuta</option>
                                    <option value="Ciudad Real">Ciudad Real</option>
                                    <option value="Córdoba">Córdoba</option>
                                    <option value="Cuenca">Cuenca</option>
                                    <option value="Gerona/Girona">Gerona/Girona</option>
                                    <option value="Granada">Granada</option>
                                    <option value="Guadalajara">Guadalajara</option>
                                    <option value="Guipúzcoa/Gipuzkoa">Guipúzcoa/Gipuzkoa</option>
                                    <option value="Huelva">Huelva</option>
                                    <option value="Huesca">Huesca</option>
                                    <option value="Jaén">Jaén</option>
                                    <option value="La Coruña/A Coruña">La Coruña/A Coruña</option>
                                    <option value="La Rioja">La Rioja</option>
                                    <option value="Las Palmas">Las Palmas</option>
                                    <option value="León">León</option>
                                    <option value="Lérida/Lleida">Lérida/Lleida</option>
                                    <option value="Lugo">Lugo</option>
                                    <option value="Madrid">Madrid</option>
                                    <option value="Málaga">Málaga</option>
                                    <option value="Melilla">Melilla</option>
                                    <option value="Murcia">Murcia</option>
                                    <option value="Navarra">Navarra</option>
                                    <option value="Orense/Ourense">Orense/Ourense</option>
                                    <option value="Palencia">Palencia</option>
                                    <option value="Pontevedra">Pontevedra</option>
                                    <option value="Salamanca">Salamanca</option>
                                    <option value="Segovia">Segovia</option>
                                    <option value="Sevilla">Sevilla</option>
                                    <option value="Soria">Soria</option>
                                    <option value="Tarragona">Tarragona</option>
                                    <option value="Tenerife">Tenerife</option>
                                    <option value="Teruel">Teruel</option>
                                    <option value="Toledo">Toledo</option>
                                    <option value="Valencia">Valencia</option>
                                    <option value="Valladolid">Valladolid</option>
                                    <option value="Vizcaya/Bizkaia">Vizcaya/Bizkaia</option>
                                    <option value="Zamora">Zamora</option>
                                    <option value="Zaragoza">Zaragoza</option>
                                  </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="localidad" class="col-md-4 col-form-label text-md-end">{{ __('Localidad') }}</label>
                            <div class="col-md-6">
                                <input id="localidad" type="text" class="form-control" name="localidad" value="{{ old('localidad') }}" required autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="federacion" class="col-md-4 col-form-label text-md-end">{{ __('Federación') }}</label>

                            <div class="col-md-6">
                                <input id="federacion" type="text" class="form-control" name="federacion" value="{{ old('federacion') }}" required autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="escudo" class="col-md-4 col-form-label text-md-end">{{ __('Escudo') }}</label>

                            <div class="col-md-6">
                                <input id="escudo" type="file" class="form-control" name="escudo" required>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Regístra tu Club') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection