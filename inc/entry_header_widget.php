<?php
class entry_widget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct(false, $name = 'Paragraf wejściowy');
    }
    public function widget($args, $instance)
    {
        extract($args);
        $message = $instance['message'];
        $label = $instance['label'];
        if($label !== '') {
        ?>
<p
    class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase bg-teal-400 rounded-full">
    <?php echo $label; ?>
</p>
    <?php } ?>
<h2
    class="mb-5 font-sans text-3xl font-bold tracking-tight text-slate-900 dark:text-slate-50 sm:text-4xl sm:leading-none">
    Ochotnicza <br class="hidden md:block" />
    Straż Pożarna w
    <span class="inline-block text-red-400">Robakowie.</span>
</h2>

<p class="pr-5 mb-5 text-base text-justify text-slate-700 dark:text-slate-300 md:text-lg">
    <?php echo $message; ?>
</p>
<?php }
    public function form($instance)
    {
        $message = esc_attr($instance['message']);
        $label = esc_attr($instance['label']);
        ?>
<p>
    <label for="<?php echo $this->get_field_id('label'); ?>">Etykieta</label>
    <input class="widefat" id="<?php echo $this->get_field_id('label'); ?>"
        name="<?php echo $this->get_field_name('label'); ?>" type="text" value="<?php echo $label; ?>" />
</p>

<p>
    <label for="<?php echo $this->get_field_id('message'); ?>">Zawartość</label>
    <input class="widefat" id="<?php echo $this->get_field_id('message'); ?>"
        name="<?php echo $this->get_field_name('message'); ?>" type="text" value="<?php echo $message; ?>" />
</p>

<?php
}
}
function entry_widget_init()
{
    return register_widget('entry_widget');
}
add_action('widgets_init', 'entry_widget_init');

?>