@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

{{-- GRAFICO IMPRENSA aaaa --}}
    <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Grafico Imprensa</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <p class="text-center">
                    <strong> 1 Jan, 2019 - 30 Dez, 2019</strong>
                  </p>
                  <canvas id="imprensa" width="800" height="450"></canvas>
                  
                  <script type="text/javascript">
                      
                      let clipping = [];
                      let noticias = [];
                      let mes1 = [];
                      
                      @foreach($imprensa as $valor)
                        clipping.push({!! json_encode($valor->clipping) !!});
                        noticias.push({!! json_encode($valor->noticias) !!});
                        mes1.push({!! json_encode($valor->mes) !!});
                      @endforeach



                      new Chart(document.getElementById("imprensa"), {
                      type: 'bar',
                      data: {
                        labels: mes1,
                        datasets: [
                          {
                            label: "Clipping",
                            backgroundColor: "#3e95cd",
                            data: clipping
                          },
                          {
                            label: "Noticias",
                            backgroundColor: "#8e5ea2",
                            data: noticias
                          },
                        ]
                      },
                      options: {
                        scales: {
                          yAxes: [{
                            ticks: {
                              beginAtZero:true
                            }
                          }]
                        }
                      }
                    });
                  </script>




                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </div> 
      {{-- FIM GRAFICO IMPRENSA --}}

{{-- GRAFICO IMPRENSA --}}
<div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Grafico Solicitação Design</h3>
      
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-8">
              <p class="text-center">
                <strong> 1 Jan, 2019 - 30 Dez, 2019</strong>
              </p>
              <canvas id="solicitacoesdesign" width="800" height="450"></canvas>
              
              <script type="text/javascript">
                  
                  let solicitacoes = [];
                  let mes2 = [];
                  
                  @foreach($solicitades as $valor)
                    solicitacoes.push({!! json_encode($valor->solicitacoes) !!});
                    mes2.push({!! json_encode($valor->mes) !!});
                  @endforeach



                  new Chart(document.getElementById("solicitacoesdesign"), {
                  type: 'bar',
                  data: {
                    labels: mes2,
                    datasets: [
                      {
                        label: "Clipping",
                        backgroundColor: "#3e95cd",
                        data: solicitacoes
                      },
                    ]
                  },
                  options: {
                        scales: {
                          yAxes: [{
                            ticks: {
                              beginAtZero:true
                            }
                          }]
                        }
                      }
              });
              </script>
              <!-- /.chart-responsive -->
            </div>
            <!-- /.col -->
            <div class="col-md-4">
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- ./box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
</div>
{{-- FIM GRAFICO IMPRENSA --}}

{{-- GRAFICO IMPRENSA --}}
<div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Grafico Facebook Jorge</h3>
          
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-8">
              <p class="text-center">
                <strong> 1 Jan, 2019 - 30 Dez, 2019</strong>
              </p>
              <canvas id="facejorge" width="800" height="450"></canvas>
              
              <script type="text/javascript">
                  
                  let totalsegui = [];
                  let envolvi = [];
                  let totalcurti = [];
                  let crescime = [];
                  let totalpublica = [];
                  let reac = [];
                  let coment = [];
                  let compartilha = [];
                  console.log(compartilha);
                  let mes3 = [];
                  
                  @foreach($facejorge as $valor)
                    totalsegui.push({!! json_encode($valor->total_seguidores) !!});
                    envolvi.push({!! json_encode($valor->envolvimento) !!});
                    totalcurti.push({!! json_encode($valor->total_curtidas) !!});
                    crescime.push({!! json_encode($valor->crescimento) !!});
                    totalpublica.push({!! json_encode($valor->total_publicacoes) !!});
                    reac.push({!! json_encode($valor->reacoes) !!});
                    coment.push({!! json_encode($valor->comentarios) !!});
                    compartilha.push({!! json_encode($valor->compartilhamentos) !!});
                    mes3.push({!! json_encode($valor->mes) !!});
                  @endforeach



                  new Chart(document.getElementById("facejorge"), {
                  type: 'bar',
                  data: {
                    labels: mes3,
                    datasets: [
                      {
                        label: "Total de Seguidores",
                        backgroundColor: "#ff4000",
                        data: totalsegui
                      },
                      {
                        label: "Envolvimento",
                        backgroundColor: "#ffff00",
                        data: envolvi
                      },
                      {
                        label: "Total de Curtidas",
                        backgroundColor: "#0040ff",
                        data: totalcurti
                      },
                      {
                        label: "Crescimento",
                        backgroundColor: "#800080",
                        data: crescime
                      },
                      {
                        label: "Total de Publicações",
                        backgroundColor: "#900C3F",
                        data: totalpublica
                      },
                      {
                        label: "Reações",
                        backgroundColor: "#FF0000",
                        data: reac
                      },
                      {
                        label: "Comentarios",
                        backgroundColor: "#000000",
                        data: coment
                      },
                      {
                        label: "Compartilhamento",
                        backgroundColor: "#808000",
                        data: compartilha
                      },
                    ]
                  },
                  options: {
                        scales: {
                          yAxes: [{
                            ticks: {
                              beginAtZero:true
                            }
                          }]
                        }
                      }
              });
              </script>
              <!-- /.chart-responsive -->
            </div>
            <!-- /.col -->
            <div class="col-md-4">
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- ./box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
</div>
{{-- FIM GRAFICO IMPRENSA --}}

{{-- GRAFICO IMPRENSA --}}
<div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Grafico Facebook Prefeitura</h3>
          
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-8">
              <p class="text-center">
                <strong> 1 Jan, 2019 - 30 Dez, 2019</strong>
              </p>
              <canvas id="facepref" width="800" height="450"></canvas>
              
              <script type="text/javascript">
                  
                  let segui = [];
                  let alcanc = [];
                  let envolvimen = [];
                  let intera = [];
                  let public = [];
                  let seginsta = [];
                  let mes4 = [];
                  
                  @foreach($facepref as $valor)
                    segui.push({!! json_encode($valor->seguidores) !!});
                    alcanc.push({!! json_encode($valor->alcance) !!});
                    envolvimen.push({!! json_encode($valor->envolvimento) !!});
                    intera.push({!! json_encode($valor->interacoes) !!});
                    public.push({!! json_encode($valor->publicacoes) !!});
                    seginsta.push({!! json_encode($valor->seg_insta) !!});
                    mes4.push({!! json_encode($valor->mes) !!});
                  @endforeach

                  new Chart(document.getElementById("facepref"), {
                  type: 'bar',
                  data: {
                    labels: mes4,
                    datasets: [
                      {
                        label: "Seguidores",
                        backgroundColor: "#ff4000",
                        data: segui
                      },
                      {
                        label: "Alcance",
                        backgroundColor: "#ffff00",
                        data: alcanc
                      },
                      {
                        label: "Envolvimento",
                        backgroundColor: "#0040ff",
                        data: envolvimen
                      },
                      {
                        label: "Interações",
                        backgroundColor: "#800080",
                        data: intera
                      },
                      {
                        label: "Publicações",
                        backgroundColor: "#900C3F",
                        data: public
                      },
                      {
                        label: "Seguidores Instagram",
                        backgroundColor: "#FF0000",
                        data: seginsta
                      },
                    ]
                  },
                  options: {
                        scales: {
                          yAxes: [{
                            ticks: {
                              beginAtZero:true
                            }
                          }]
                        }
                      }
              });
              </script>
              <!-- /.chart-responsive -->
            </div>
            <!-- /.col -->
            <div class="col-md-4">
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- ./box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
</div>
{{-- FIM GRAFICO IMPRENSA --}}

@stop