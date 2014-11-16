@extends('layouts.master')

@section('content')
<!-- Hero Section -->
<div id="hero">
  <div class="container">

    <div class="row">
      <div class="col-sm-12">
        <h1>¿Donde Voto?</h1>
        <p class="subtitle">Ingresa tu cédula para verificar:</p>      
      </div>
    </div>  

    <div class="row">
      <div class="hero-box col-sm-8 col-sm-offset-2">
        <form role="search" method="get" id="searchform" class="form-search" action="#">
          <div class="input-group">
            <input type="text" id="autocomplete-dynamic" name="s" id="s" class="form-control input-lg" autocomplete="off" placeholder="V-21382657">
            <span class="input-group-btn">
              <input type="submit" id="searchsubmit" value="Buscar" class="btn">
            </span>
          </div>
        </form>
      </div>   
    </div>  

    <div id="boxes">
      <div class="row">
        <div class="col-sm-4">
          <article class="box box-left">
            <a href="knowledgebase.html"><span></span><i class="fa fa-file-text-o"></i></a>
            <h3><a href="knowledgebase.html">Knowledge Base</a></h3>
            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum</p>
            <a class="btn" href="knowledgebase.html">Continue</a>
          </article>
        </div>
        <div class="col-sm-4">
          <article class="box box-middle">
            <a href="faq-accordion.html"><span></span><i class="fa fa-question-circle"></i></a>
            <h3><a href="faq-accordion.html">FAQ</a></h3>
            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum</p>
            <a class="btn" href="faq-accordion.html">Continue</a>
          </article>
        </div>
        <div class="col-sm-4">
          <article class="box box-right">
            <a href="contact.html"><span></span><i class="fa fa-envelope-o"></i></a>
            <h3><a href="contact.html">Contact</a></h3>
            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum</p>
            <a class="btn" href="contact.html">Continue</a>
          </article>
        </div>
      </div>
    </div>

  </div>
</div><!-- /#hero -->
@endsection