<section class="container-fluid">
    <span class="text-warning"><?= ucfirst(gmstrftime('%A')) . ', ' . strftime('%d de %B de %Y', strtotime('today')); ?></span>
</section>

<div class="row">
    <div class="col-xs-12 col-md-12 mt-30">
        <section id="user_agenda" class="container-fluid">
            <?= $this->element('Agenda/user_agenda'); ?>
        </section>
    </div>
    <div class="col-xs-12 col-md-12 mt-30">
        <section class="container-fluid">
            <h2 class="text-success">&bull; AGENDAR NOVO HORÁRIO</h2>
        </section>
    </div>
</div>

<section class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-md-9">

            <div class="row mt-30" id="add_schedule_service">
                <div class="col-xs-12 col-md-3">
                    <section id="add_schedule_service_01">
                        <p>Qual o serviço?<br><small class="text-muted">Selecione qual serviço você deseja agendar:</small></p>
                    </section>
                </div>
                <div class="col-xs-12 col-md-5">
                    <section id="add_schedule_service_02">
                        <div class="form-group">
                            <?php echo $this->Form->input('service', ['label' => false, 'class' => 'form-control mt-30', 'options' => $servicesList]); ?>
                        </div>
                    </section>
                </div>
                <div class="col-xs-12 col-md-4">
                    <section id="add_schedule_service_03">
                        --
                    </section>
                </div>
            </div>

            <div class="row mt-30" id="add_schedule_barber">
                <div class="col-xs-12 col-md-3">
                    <section id="add_schedule_barber_01">
                        <p>Qual o barbeiro?<br><small class="text-muted">Selecione quem executará o serviço:</small></p>
                    </section>
                </div>
                <div class="col-xs-12 col-md-5">
                    <section id="add_schedule_barber_02">
                        <?php echo $this->Form->input('barber', ['label' => false, 'class' => 'form-control mt-30', 'options' => $barberList]); ?>
                    </section>
                </div>
                <div class="col-xs-12 col-md-4">
                    <section id="add_schedule_barber_03">
                        --
                    </section>
                </div>
            </div>

            <div class="row mt-30" id="add_schedule_date">
                <div class="col-xs-12 col-md-3">
                    <section id="add_schedule_date_01">
                        <p>Em que data?<br><small class="text-muted">Selecione qual o dia:</small></p>
                    </section>
                </div>
                <div class="col-xs-12 col-md-5">
                    <section id="add_schedule_date_02">
                        <?php echo $this->Form->input('date', ['label' => false, 'class' => 'form-control mt-30', 'options' => $dateList]); ?>
                    </section>
                </div>
                <div class="col-xs-12 col-md-4">
                    <section id="add_schedule_date_03">
                        --
                    </section>
                </div>
            </div>

            <div class="row mt-30" id="add_schedule_time">
                <div class="col-xs-12 col-md-3">
                    <section id="add_schedule_time_01">
                        <p>Em qual horário?<br><small class="text-muted">Selecione quando:</small></p>
                    </section>
                </div>
                <div class="col-xs-12 col-md-5">
                    <section id="add_schedule_time_02">
                        <?php echo $this->Form->input('time', ['label' => false, 'class' => 'form-control mt-30', 'options' => $timeList]); ?>
                    </section>
                </div>
                <div class="col-xs-12 col-md-4">
                    <section id="add_schedule_time_03">
                        --
                    </section>
                </div>
            </div>


        </div>
        <div class="col-xs-12 col-md-3 text-right">
            selecionado
        </div>
    </div>
</section>











