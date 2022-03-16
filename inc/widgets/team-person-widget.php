<?php
class team_person_widget extends WP_Widget
{
    public function __construct()
    {
        $widget_ops = array(
            'classname' => 'widget_search',
            'description' => 'Członek zarządu',
            'customize_selective_refresh' => true,
            'show_instance_in_rest' => true,
        );
        parent::__construct('teams', 'Członek zarządu', $widget_ops);
    }

    public function widget($args, $instance)
    {
        extract($args);
        $position = apply_filters('widget_title', $instance['position']);
        $name = $instance['name'];
        ?>
<?php echo $before_widget; ?>
<?php if ($position) {
            echo $before_title . $position . '22' . $after_title;
        }
        ?>
<?php echo $name; ?>
<?php echo $after_widget; ?>

<div>
  <div class="relative pb-56 mb-4 rounded shadow lg:pb-64">
    @isset($person->profilePhotoPath)
    <img class="absolute object-cover w-full h-full rounded" src="{{ Storage::url($person->profilePhotoPath) }}"
      alt="{{$person->name}}" />
    @else
    <img class="absolute object-cover w-full h-full rounded" src="{{ Storage::url(' img/avatars/man.png') }}"
      alt="{{$person->name}}" />
    @endif

  </div>
  <div class="flex flex-col sm:text-center">
    <p class="text-lg font-bold"><?php echo $name; ?></p>
    <p class="text-xs text-gray-800 "><?php echo $position; ?></p>
    <p class="mb-5 text-xs text-gray-800">{{$person->phone}}</p>
    <div class="flex items-center space-x-3 sm:justify-center">

      @isset($person->socialFacebook)
      <a href="{{$person->socialFacebook}}" target="_blank"
        class="text-gray-600 transition-colors duration-300 hover:text-blue-800">
        <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
          <path
            d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z">
          </path>
        </svg>
      </a>
      @endif

      @isset($person->socialTwitter)
      <a href="{{$person->socialTwitter}}" target="_blank"
        class="text-gray-600 transition-colors duration-300 hover:text-blue-500">
        <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
          <path
            d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z">
          </path>
        </svg>
      </a>
      @endif

      @isset($person->socialInstagram)
      <a href="{{$person->socialInstagram}}" target="_blank"
        class="text-gray-600 transition-colors duration-300 hover:text-violet-600">
        <svg viewBox="0 0 16 16" fill="currentColor" class="h-5">
          <path
            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
        </svg>
      </a>
      @endif

      @isset($person->socialYoutube)
      <a href="{{$person->socialYoutube}}" target="_blank"
        class="text-gray-600 transition-colors duration-300 hover:text-red-accent-400">
        <svg viewBox="0 0 16 16" fill="currentColor" class="h-5">
          <path
            d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
        </svg>
      </a>
      @endif

    </div>
  </div>
</div>
<?php }

    public function form($instance)
    {
        $position = !empty($instance['position']) ? $instance['position'] : '';
        $name = !empty($instance['name']) ? $instance['name'] : '';
        ?>
<p>
  <label for="<?php echo $this->get_field_id('position'); ?>">Stanowisko</label>
  <input class="widefat" id="<?php echo $this->get_field_id('position'); ?>"
    name="<?php echo $this->get_field_name('position'); ?>" type="text" value="<?php echo $position; ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id('name'); ?>">Imię i nazwisko</label>
  <input class="widefat" id="<?php echo $this->get_field_id('name'); ?>"
    name="<?php echo $this->get_field_name('name'); ?>" type="text" value="<?php echo $name; ?>" />
</p>
<?php
}
}
function team_person_widget_init()
{
    return register_widget('team_person_widget');
}
add_action('widgets_init', 'team_person_widget_init');
