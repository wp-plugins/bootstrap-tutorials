<?php 
    /*
    Plugin Name: Bootstrap Tutorials
    Plugin URI: http://getbootstrap.com/
    Description: Learn bootstrap tutorials in wordpress admin panel
    Author: Madiri Salman Aashish
    Version: 1.0
   
    */

	function oscimp_admin_actions() {
 
add_menu_page('Bootstrap Tutorials', 'Bootstrap Tutorials', 'manage_options', 'New Users', 'my_magic_function');
  
 
 }
 
 function my_magic_function()
 {
	

echo '<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="'.plugin_dir_url( __FILE__ ).'css/bootstrap.min.css">';


echo '<h4>'."Demo Buttons".'</h4><br>';

echo '<div class="container" style="width: 100%;!important"><div class="row"><div class="col-md-12"><div class="bs-example" data-example-id="btn-variants">
    <button type="button" class="btn btn-default">Default</button>
    <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-danger">Danger</button>
    <button type="button" class="btn btn-link">Link</button>
  </div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Standard button --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Provides extra visual weight and identifies the primary action in a set of buttons --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Indicates a successful or positive action --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Contextual button for informational alert messages --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Indicates caution should be taken with this action --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Indicates a dangerous or potentially negative action --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Deemphasize a button by making it look like a link while maintaining button behavior --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-link"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/button&gt;</span></code></pre></div>';

echo '<h4>'."Images".'</h4><br>';

echo '<div class="bs-example bs-example-images" data-example-id="image-shapes">
    <img data-src="holder.js/140x140" class="img-rounded" alt="140x140" style="width: 140px; height: 140px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNGVjOWI3NWFiNyB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE0ZWM5Yjc1YWI3Ij48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ1LjUiIHk9Ijc0LjUiPjE0MHgxNDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
    <img data-src="holder.js/140x140" class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNGVjOWI3MzgyMCB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE0ZWM5YjczODIwIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ1LjUiIHk9Ijc0LjUiPjE0MHgxNDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
    <img data-src="holder.js/140x140" class="img-thumbnail" alt="140x140" style="width: 140px; height: 140px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNGVjOWI3YWYxYSB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE0ZWM5YjdhZjFhIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ1LjUiIHk9Ijc0LjUiPjE0MHgxNDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
  </div>';
echo '<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"img-rounded"</span><span class="nt">&gt;</span>
<span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"img-circle"</span><span class="nt">&gt;</span>
<span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"img-thumbnail"</span><span class="nt">&gt;</span></code></pre></div>';

echo '<h4>'."Forms".'</h4><br>';

echo '<div class="bs-example" data-example-id="simple-horizontal-form">
    <form class="form-horizontal">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label>
              <input type="checkbox"> Remember me
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="button" class="btn btn-default">Sign in</button>
        </div>
      </div>
    </form>
  </div>';


echo '<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-horizontal"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputEmail3"</span> <span class="na">class=</span><span class="s">"col-sm-2 control-label"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputEmail3"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputPassword3"</span> <span class="na">class=</span><span class="s">"col-sm-2 control-label"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputPassword3"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-offset-2 col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label&gt;</span>
          <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span> Remember me
        <span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-offset-2 col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Sign in<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></div>';

echo '<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;textarea</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">rows=</span><span class="s">"3"</span><span class="nt">&gt;&lt;/textarea&gt;</span></code></pre></div>';

echo '<form>
      <textarea class="form-control" rows="3" placeholder="Textarea"></textarea>
    </form>';


echo '<div class="bs-example" data-example-id="block-checkboxes-radios">
    <form>
      <div class="checkbox">
        <label>
          <input type="checkbox" value="">
          Option one is this and that—be sure to include why its great
        </label>
      </div>
      <div class="checkbox disabled">
        <label>
          <input type="checkbox" value="" disabled="">
          Option two is disabled
        </label>
      </div>
      <br>
      <div class="radio">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
          Option one is this and that—be sure to include why its great
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
          Option two can be something else and selecting it will deselect option one
        </label>
      </div>
      <div class="radio disabled">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled="">
          Option three is disabled
        </label>
      </div>
    </form>
  </div>';


echo '<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">""</span><span class="nt">&gt;</span>
    Option one is this and that<span class="ni">&amp;mdash;</span>be sure to include why its great
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox disabled"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">""</span> <span class="na">disabled</span><span class="nt">&gt;</span>
    Option two is disabled
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"radio"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"optionsRadios"</span> <span class="na">id=</span><span class="s">"optionsRadios1"</span> <span class="na">value=</span><span class="s">"option1"</span> <span class="na">checked</span><span class="nt">&gt;</span>
    Option one is this and that<span class="ni">&amp;mdash;</span>be sure to include why its great
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"radio"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"optionsRadios"</span> <span class="na">id=</span><span class="s">"optionsRadios2"</span> <span class="na">value=</span><span class="s">"option2"</span><span class="nt">&gt;</span>
    Option two can be something else and selecting it will deselect option one
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"radio disabled"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"optionsRadios"</span> <span class="na">id=</span><span class="s">"optionsRadios3"</span> <span class="na">value=</span><span class="s">"option3"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
    Option three is disabled
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>';

echo '<form>
      <select class="form-control">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </form>';

echo '<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;option&gt;</span>1<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>2<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>3<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>4<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>5<span class="nt">&lt;/option&gt;</span>
<span class="nt">&lt;/select&gt;</span></code></pre></div>';



echo '</div></div></div>';


 }








 add_action('admin_menu', 'oscimp_admin_actions');

  
	
	?>