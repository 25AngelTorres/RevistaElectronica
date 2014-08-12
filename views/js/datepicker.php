<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Datepicker for Bootstrap, from Twitter</title>
    <link href="..bootstrap.css" rel="stylesheet">
    <link href="..datepicker.css" rel="stylesheet">
	<style>
	.container {
		background: #fff;
	}
	#alert {
		display: none;
	}
	</style>
    <link href="prettify.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>

  <body>
  <div class="container">
    <section id="typeahead">
      <div class="page-header">
        <h1>Datepicker for Bootstrap <small>bootstrap-datepicker.js</small></h1>
      </div><script type="text/javascript"><!--
google_ad_client = "ca-pub-5673865389945635";
/* Recomandata */
google_ad_slot = "2811626550";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

      <div class="row">
        <div class="span3 columns">
          <h3>About</h3>
          <p>Add datepicker picker to field or to any other element.</p>
		  <ul>
			<li>can be used as a component</li>
			<li>formats: dd, d, mm, m, yyyy, yy</li>
			<li>separators: -, /, .</li>
		  </ul>
          <p><a href="datepicker.zip" target="_blank" class="btn">Download</a></p>
		  <p>
		  <!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" data-size="medium" data-annotation="inline" data-width="120"></div>

<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
		  </p>
          <h3>Change log</h3>
		  <dl>
      <dt>12/3/2013</dt>
      <dd>Fixed bug where date selection from previous and next year was wrong</dd>
      <dd>Fixed bug where a variable was polluting the namespace</dd>
      <dt>10/3/2013</dt>
      <dd>Changed so the value will not be set unless the user chooses a date</dd>
      <dt>16/2/2013</dt>
      <dd>Fixed it to work with Boostrap version 2.3.0 and jQuery 1.9.1</dd>
      <dd>Added a new callback, 'onRender' to decorate or disabled specific dates</dd>
      <dd>Added the option to disable specific dates</dd>
      <dd>Fixed some bugs in the parser</dd>
      <dd>Fixed some bugs in the formater</dd>
      <dt>29/9/2012</dt>
			<dd>Fixed it to work with Boostrap version 2.1.1 and jQuery 1.8.1</dd>
			<dd>Fixed current date highlight</dd>
			<dd>Added the option to set the `viewMode` via data attribute</dd>
			<dd>Added a new option: 'minViewMode'</dd>
			<dd>Changed the navigation images to HTML entities</dd>
			<dd>Fixed the parsing date</dd>
			<dd>Exposed a new method 'setDate'</dd>
			<dd>Adde a new property to the 'changeDate' event: 'viewMode'</dd>
			<dd>Fixed transition from month to month, when the next month has less days then the previous</dd>
		  </dl>
        </div>
        <div class="span9 columns">
          <h2>Example</h2>
          <p>Attached to a field with the format specified via options.</p>
          <div class="well">
            <input type="text" class="span2" value="02-16-2012" id="dp1" >
          </div>
          <p>Attachet to a field with the format specified via data tag.</p>
          <div class="well">
            <input type="text" class="span2" value="02/16/12" data-date-format="mm/dd/yy" id="dp2" >
          </div>
          <p>As component.</p>
          <div class="well">
			  <div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
				<input class="span2" size="16" type="text" value="12-02-2012" readonly>
				<span class="add-on"><i class="icon-calendar"></i></span>
			  </div>
          </div>
          <p>Start with years viewMode.</p>
          <div class="well">
			  <div class="input-append date" id="dpYears" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
				<input class="span2" size="16" type="text" value="12-02-2012" readonly>
				<span class="add-on"><i class="icon-calendar"></i></span>
			  </div>
          </div>
          <p>Limit the view mode to months</p>
          <div class="well">
			  <div class="input-append date" id="dpMonths" data-date="102/2012" data-date-format="mm/yyyy" data-date-viewmode="years" data-date-minviewmode="months">
				<input class="span2" size="16" type="text" value="02/2012" readonly>
				<span class="add-on"><i class="icon-calendar"></i></span>
			  </div>
          </div>
          <p>Attached to other elment then field and using events to work with the date values.</p>
          <div class="well">
            
            
			<div class="alert alert-error" id="alert">
				<strong>Oh snap!</strong>
			  </div>
			<table class="table">
				<thead>
					<tr>
						<th>Start date<a href="#" class="btn small" id="dp4" data-date-format="yyyy-mm-dd" data-date="2012-02-20">Change</a></th>
						<th>End date<a href="#" class="btn small" id="dp5" data-date-format="yyyy-mm-dd" data-date="2012-02-25">Change</a></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td id="startDate">2012-02-20</td>
						<td id="endDate">2012-02-25</td>
					</tr>
				</tbody>
			</table>
          </div>
          <p>Disabling dates in the past and dependent disabling.</p>
          <div class="well">
      <table class="table">
        <thead>
          <tr>
            <th>Check in: <input type="text" class="span2" value="" id="dpd1" ></th>
            <th>Check out: <input type="text" class="span2" value="" id="dpd2" ></th>
          </tr>
        </thead>
      </table>
          </div>
          <pre class="prettyprint linenums">var nowTemp = new Date();&#10;var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);&#10;&#10;var checkin = $(&#39;#dpd1&#39;).datepicker({&#10;  onRender: function(date) {&#10;    return date.valueOf() &lt; now.valueOf() ? &#39;disabled&#39; : &#39;&#39;;&#10;  }&#10;}).on(&#39;changeDate&#39;, function(ev) {&#10;  if (ev.date.valueOf() &gt; checkout.date.valueOf()) {&#10;    var newDate = new Date(ev.date)&#10;    newDate.setDate(newDate.getDate() + 1);&#10;    checkout.setValue(newDate);&#10;  }&#10;  checkin.hide();&#10;  $(&#39;#dpd2&#39;)[0].focus();&#10;}).data(&#39;datepicker&#39;);&#10;var checkout = $(&#39;#dpd2&#39;).datepicker({&#10;  onRender: function(date) {&#10;    return date.valueOf() &lt;= checkin.date.valueOf() ? &#39;disabled&#39; : &#39;&#39;;&#10;  }&#10;}).on(&#39;changeDate&#39;, function(ev) {&#10;  checkout.hide();&#10;}).data(&#39;datepicker&#39;);</pre>
          <hr>
          <h2>Using bootstrap-datepicker.js</h2>
          <p>Call the datepicker via javascript:</p>
          <pre class="prettyprint linenums">$('.datepicker').datepicker()</pre>
          <h3>Options</h3>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 100px;">Name</th>
               <th style="width: 50px;">type</th>
               <th style="width: 100px;">default</th>
               <th>description</th>
             </tr>
            </thead>
            <tbody>
              <tr>
               <td>format</td>
               <td>string</td>
               <td>'mm/dd/yyyy'</td>
               <td>the date format, combination of  d, dd, m, mm, yy, yyy.</td>
             </tr>
              <tr>
               <td>weekStart</td>
               <td>integer</td>
               <td>0</td>
               <td>day of the week start. 0 for Sunday -  6 for Saturday</td>
             </tr>
              <tr>
               <td>viewMode</td>
               <td>string|integer</td>
               <td>0 = 'days'</td>
               <td>set the start view mode. Accepts: 'days', 'months', 'years', 0 for days, 1 for months and 2 for years</td>
             </tr>
              <tr>
               <td>minViewMode</td>
               <td>string|integer</td>
               <td>0 = 'days'</td>
               <td>set a limit for view mode. Accepts: 'days', 'months', 'years', 0 for days, 1 for months and 2 for years</td>
             </tr>
            </tbody>
          </table>

          <h3>Markup</h3>
          <p>Format a component.</p>
<pre class="prettyprint linenums">
&lt;div class=&quot;input-append date&quot; id=&quot;dp3&quot; data-date=&quot;12-02-2012&quot; data-date-format=&quot;dd-mm-yyyy&quot;&gt;
  &lt;input class=&quot;span2&quot; size=&quot;16&quot; type=&quot;text&quot; value=&quot;12-02-2012&quot;&gt;
  &lt;span class=&quot;add-on&quot;&gt;&lt;i class=&quot;icon-th&quot;&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/div&gt;
</pre>
          <h3>Methods</h3>
          <h4>.datepicker(options)</h4>
          <p>Initializes an datepicker.</p>
          <h4>.datepicker('show')</h4>
          <p>Show the datepicker.</p>
          <h4>.datepicker('hide')</h4>
          <p>Hide the datepicker.</p>
          <h4>.datepicker('place')</h4>
          <p>Updates the date picker's position relative to the element</p>
          <h4>.datepicker('setValue', value)</h4>
          <p>Set a new value for the datepicker. It cand be a string in the specified format or a Date object.</p>
		  
		  
          <h3>Events</h3>
          <p>Datepicker class exposes a few events for manipulating the dates.</p>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 150px;">Event</th>
               <th>Description</th>
             </tr>
            </thead>
            <tbody>
             <tr>
               <td>show</td>
               <td>This event fires immediately when the date picker is displayed.</td>
             </tr>
             <tr>
               <td>hide</td>
               <td>This event is fired immediately when the date picker is hidden.</td>
             </tr>
             <tr>
               <td>changeDate</td>
               <td>This event is fired when the date is changed.</td>
             </tr>
             <tr>
               <td>onRender</td>
               <td>This event is fired when a day is rendered inside the datepicker. Should return a string. Return 'disabled' to disable the day from being selected.</td>
             </tr>
            </tbody>
          </table>
<pre class="prettyprint linenums">
$(&#039;#dp5&#039;).datepicker()
  .on(&#039;changeDate&#039;, function(ev){
    if (ev.date.valueOf() &lt; startDate.valueOf()){
      ....
    }
  });
</pre>
        </div>
      </div>
    </section>
</div>
    <script src="prettify.js"></script>
    <script src="jquery.js"></script>
    <script src="bootstrap-datepicker.js"></script>
	<script>
	if (top.location != location) {
    top.location.href = document.location.href ;
  }
		$(function(){
			window.prettyPrint && prettyPrint();
			$('#dp1').datepicker({
				format: 'mm-dd-yyyy'
			});
			$('#dp2').datepicker();
			$('#dp3').datepicker();
			$('#dp3').datepicker();
			$('#dpYears').datepicker();
			$('#dpMonths').datepicker();
			
			
			var startDate = new Date(2012,1,20);
			var endDate = new Date(2012,1,25);
			$('#dp4').datepicker()
				.on('changeDate', function(ev){
					if (ev.date.valueOf() > endDate.valueOf()){
						$('#alert').show().find('strong').text('The start date can not be greater then the end date');
					} else {
						$('#alert').hide();
						startDate = new Date(ev.date);
						$('#startDate').text($('#dp4').data('date'));
					}
					$('#dp4').datepicker('hide');
				});
			$('#dp5').datepicker()
				.on('changeDate', function(ev){
					if (ev.date.valueOf() < startDate.valueOf()){
						$('#alert').show().find('strong').text('The end date can not be less then the start date');
					} else {
						$('#alert').hide();
						endDate = new Date(ev.date);
						$('#endDate').text($('#dp5').data('date'));
					}
					$('#dp5').datepicker('hide');
				});

        // disabling dates
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd1').datepicker({
          onRender: function(date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
          }
          checkin.hide();
          $('#dpd2')[0].focus();
        }).data('datepicker');
        var checkout = $('#dpd2').datepicker({
          onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          checkout.hide();
        }).data('datepicker');
		});
	</script>
	<script src="urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-106117-1";
urchinTracker();
</script>
  </body>
 </html>