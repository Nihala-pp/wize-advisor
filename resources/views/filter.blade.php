<div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-6564a68" data-id="6564a68" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
			  <div class="elementor-element elementor-element-24fcef1 elementor-widget__width-auto elementor-widget-mobile__width-auto elementor-widget elementor-widget-html" data-id="24fcef1" data-element_type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
			      <select id="expertise" class="form-control select2">
                     <option value="">Expertise</option>
				         @foreach($expertise as $key => $expert)
                       <option value="{{ $expert->expertise }}">{{ $expert->expertise }}</option>
                         @endforeach
                  </select>		
			    </div>
			</div>
		</div>
	</div>
	<div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-3b86e4b" data-id="3b86e4b" data-element_type="column">
	  <div class="elementor-widget-wrap elementor-element-populated">
		<div class="elementor-element elementor-element-2aaefd5 elementor-widget__width-auto elementor-widget elementor-widget-html" data-id="2aaefd5" data-element_type="widget" data-widget_type="html.default">
		  <div class="elementor-widget-container">
			 <select id="date" class="form-control select2">
               <option value="">Days Available</option>
                  @foreach($slot as $st)
               <option value="{{ $st->date }}">{{ $st->date }}</option>
                  @endforeach
                 </select>		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-75e69ee" data-id="75e69ee" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-fc79a1f elementor-widget__width-auto elementor-widget elementor-widget-html" data-id="fc79a1f" data-element_type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
			<select id="time" class="form-control select2">
 <option value="">Time Slot</option>
 @foreach($slot as $tt)
    <option value="{{ $tt->start_time.'-'.$tt->end_time }}">{{ $tt->start_time }} - {{ $tt->end_time }}</option>
 @endforeach
</select>		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-e13ad64" data-id="e13ad64" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-fc103d5 elementor-widget__width-initial elementor-widget-mobile__width-auto elementor-widget elementor-widget-html" data-id="fc103d5" data-element_type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
			<select id="price" class="form-control select2" name="price">
 <option value="">Price</option>
 @foreach($price as $pr)
    <option value="{{ $pr->metaData ?  $pr->metaData->price_per_call : '' }}">{{ $pr->metaData ?  $pr->metaData->price_per_call : '' }}$</option>
 @endforeach
</select>		</div>
				</div>
				<!-- <div class="elementor-element elementor-element-a2e109c elementor-widget__width-auto elementor-widget-mobile__width-auto elementor-widget elementor-widget-html" data-id="a2e109c" data-element_type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
			<select id="industry" class="form-control">
 <option>Industry</option>
 <option>Startup</option>
</select>		
</div>
				</div> -->
					</div>
		</div>
  <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-cfa3943" data-id="cfa3943" data-element_type="column">
	  <div class="elementor-widget-wrap elementor-element-populated">
		 <div class="elementor-element elementor-element-1512c4b elementor-widget__width-initial elementor-widget-mobile__width-auto elementor-widget elementor-widget-html" data-id="1512c4b" data-element_type="widget" data-widget_type="html.default">
			<div class="elementor-widget-container">
			   <select id="name" class="form-control">
                  <option value="">Search by name</option>
                      @foreach($price as $pr)
                      <option value="{{ $pr->name }}">{{ $pr->name }}</option>
                      @endforeach
                </select>		
			</div>
		</div>
	   </div>
</div>
<div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-4431e08" data-id="4431e08" data-element_type="column">
	<div class="elementor-widget-wrap elementor-element-populated">
		<div class="elementor-element elementor-element-1da6230 elementor-widget__width-initial elementor-widget-mobile__width-auto elementor-widget elementor-widget-html" data-id="1da6230" data-element_type="widget" data-widget_type="html.default">
		  <div class="elementor-widget-container">
			<select id="sort" class="form-control">
 <option value="">Sort by</option>
 <option value="asc">ASC</option>
 <option value="desc">DESC </option>
</select>		</div>
				</div>
					</div>
		</div>