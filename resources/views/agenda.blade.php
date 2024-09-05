{{-- resources/views/home.blade.php --}}
@extends('layouts.master')

@section('content')

<!-- Row start -->
<div class="row gx-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Agenda de 05/09/2024</h4>
            </div>
            <div class="card-body">
                <div class="row gx-3">
                    <div class="col-xl-2 col-lg-3 col-sm-4 col-12">
                        <div id="external-events">
                            <h4>Procedimentos</h4>

                            <div id="external-events-list">
                                <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
                                    <div class="fc-event-main">Corte Feminino</div>
                                </div>
                                <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
                                    <div class="fc-event-main">Lash Lifting</div>
                                </div>
                                <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
                                    <div class="fc-event-main">Brow Lamination</div>
                                </div>
                                <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
                                    <div class="fc-event-main">Escova Modelada</div>
                                </div>
                                <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
                                    <div class="fc-event-main">Manicure Russa</div>
                                </div>
                            </div>

                            <p>
                                <input type="checkbox" id="drop-remove" />
                                <label for="drop-remove">Remove after drop</label>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-9 col-sm-8 col-12">
                        <div id="draggableCalendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row end -->

<!-- Calendar JS -->
<script src="{{ asset('vendor/calendar/js/main.min.js') }}"></script>
<script src="{{ asset('vendor/calendar/custom/draggable-calendar.js') }}"></script>

@endsection