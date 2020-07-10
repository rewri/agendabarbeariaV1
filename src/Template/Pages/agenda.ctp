<?php //debug($establishment); ?>
<section class="container-fluid">
    <span class="text-warning"><?= ucfirst(gmstrftime('%A')) . ', ' . strftime('%d de %B de %Y', strtotime('today')); ?></span>
</section>

<div class="row">
    <div class="col-xs-12 col-md-12 mt-30">
        <section class="container">
            <button type="button" class="btn btn-lg btn-block btn-success btn-agenda">AGENDAR NOVO HORÁRIO</button>
        </section>
    </div>
    <div class="col-xs-12 col-md-12 mt-30">
        <section id="user_agenda" class="container-fluid">
            <?= $this->element('Agenda/user_agenda'); ?>
        </section>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-md-7 mt-30">
        <section id="establishment_schedule" class="container-fluid">
            <?= $this->element('Agenda/establishment_schedule'); ?>
        </section>
    </div>
    <div class="col-xs-12 col-md-5 mt-30">
        <section id="establishment_services" class="container-fluid">
            <?= $this->element('Agenda/establishment_services'); ?>
        </section>
    </div>
</div>









