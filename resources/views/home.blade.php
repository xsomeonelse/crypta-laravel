@extends('layoutHeader')

@section('title', 'CRYPTA')

@section('content')
	<section class="ae-container-fluid main">
      <div class="para-adi ae-container-fluid main-2">
        @auth
          {{ auth()->user()->name }}
        @endauth
        <h3>¿Qué son?</h3>
        <p>Las energías renovables son aquellas que se obtienen a partir de fuentes naturales que producen energía de forma inagotable e indefinida. Por ejemplo, la energía solar, la energía eólica o la energía mareomotriz son fuentes renovables de energía. También se consideran renovables cuando se obtienen a partir de fuentes que se regeneran con el tiempo de manera natural, como la masa forestal.<br>Una de las principales ventajas de las energías renovables es que, además de ser inagotables, presentan un nulo o bajo impacto negativo sobre el medio ambiente, por lo que se consideran energías limpias. En la actualidad las energías renovables son una realidad presente en nuestra sociedad y sus beneficios para el medio ambiente son más que evidentes.
        <br>
        <a href="http://www.lineaverdehuelva.com/lv/consejos-ambientales/energias-renovables/Que-son-las-energias-renovables.asp#:~:text=Las%20energías%20renovables%20son%20aquellas,son%20fuentes%20renovables%20de%20energía." target="_blank"  class="fuente-info">Fuente</a></p>
        <h3>¿Cúal es su importancia?</h3>

        <p>Las energías renovables son fuentes de energía limpias, inagotables y crecientemente competitivas. Se diferencian de los combustibles fósiles principalmente en su diversidad, abundancia y potencial de aprovechamiento en  cualquier parte del planeta, pero sobre todo en que no producen gases de efecto invernadero –causantes del cambio climático- ni emisiones contaminantes. Además, sus costes evolucionan a la baja de forma sostenida, mientras que la tendencia general de costes de los combustibles fósiles es la opuesta, al margen de su volatilidad coyuntural. <br>El crecimiento de las energías renovables es imparable, como queda reflejado en las estadísticas aportadas anualmente por la Agencia Internacional de la Energía (AIE): Según las previsiones de la AIE, la participación de las renovables en el suministro eléctrico global pasará del 26% en 2018 al 44% en 2040, y proporcionarán 2/3 del incremento de demanda eléctrica registrado en ese período, principalmente a través de las tecnologías eólica y fotovoltaica.
        <br>
        <a href="https://www.acciona.com/es/energias-renovables/?gclid=Cj0KCQjwufn8BRCwARIsAKzP695fCrAnj66NWhGemAisRsu6aFZBGQn1eqrDywj9IqVXOPUshUJ8qiAaAum4EALw_wcB" target="_blank"  class="fuente-info">Fuente</a></p>

      </div>
      <section class="ae-container-fluid ae-container-fluid--inner loading rk-portfolio ">
        <div class="rk-portfolio__items">
          <div class="rk-items-cont rk-size-6 rk-tosize-8"><a href="/eolica" class="rk-item rk-item--flex item-1 rk-size-12 rk-tosize-6 rk-landscape ">
              <div class="item-meta">
                <h2>Energía Eólica</h2>
              </div></a><a href="/solar" class="rk-item rk-item--flex item-2 rk-size-12 rk-tosize-6 rk-landscape ">
              <div class="item-meta">
                <h2>Energía Solar</h2>
              </div></a>
          </div><a href="/hidraulica" class="rk-item rk-item--flex item-3 rk-size-6 rk-tosize-4 rk-portrait rk-tosquare">
            <div class="item-meta">
              <h2>Energía Hidráulica</h2>
            </div></a>
          <div class="rk-items-cont rk-size-4 rk-tosize-8"><a href="/biogas" class="rk-item rk-item--flex item-4 rk-size-12 rk-tosize-6 rk-square ">
              <div class="item-meta">
                <h2>Biogás</h2>
              </div></a><a href="/biomasa" class="rk-item rk-item--flex item-5 rk-size-12 rk-tosize-6 rk-square ">
              <div class="item-meta">
                <h2>Biomasa</h2>
              </div></a>
          </div><a href="/geotermica" class="rk-item rk-item--flex item-6 rk-size-8 rk-tosize-3 rk-square ">
            <div class="item-meta">
              <h2>Energía Geotérmica</h2>
            </div></a>
          </div>
        </div>
      </section>
    </section>

@endsection