title: Sliders
body:
  -
    type: text
    text: '<h2>Sliders</h2>'
  -
    type: image
    image:
      - /assets/VMPG/image62.png
    alignment: left
  -
    type: text
    text: '<p>Sliders are basically knobs that have been uncurled and laid out in a line, so they share nearly all their properties with knobs. They tend to get less love from module designers than knobs do because they take up more space, but they’re awesome if you’ve got room for them - just ask the designers of some of the vintage ARP synthesizers like the Odyssey and the Axxe, which eschewed knobs for sliders entirely. Sliders are well suited for when you need to compare a series of values at a glance, as happens with the track volumes on a mixer, or when you need a series of controls to display a graph-like value, such as with an ADSR envelope.</p><p><strong>Java Class Name:</strong> &nbsp;VoltageSlider</p><p><strong>Notable APIs:</strong></p><p><code>void SetValue( double newValue );</code><br>This will set the slider’s value. newValue should be within slider’s min and max ranges.</p><p><code>double GetValue(); </code><br>Retrieves the slider’s current value.</p><p><strong>Notifications:</strong></p><p>A <code>Slider_Changed </code>notification will arrive in <code>Notify()</code> whenever a slider’s value changes:</p>'
  -
    type: image
    image:
      - /assets/VMPG/image19.png
    alignment: left
  -
    type: text
    text: '<p><strong>Save/Restore State: </strong>&nbsp;Voltage Modular automatically saves and restores slider states when users save and load presets. When a preset loads, you’ll get a <code>Slider_Changed</code> notification at startup (but after your <code>Initialize()</code> function has run) for each slider on your module that’s set to something other than its default value.<br></p>'
  -
    type: image
    image:
      - /assets/VMPG/image69.png
    alignment: left
  -
    type: text
    text: '<p><strong>Vertical:</strong> If checked, this will be a vertical slider (i.e., it’ll have a vertical track that you drag the slider thumb up and down along to change the slider value). If unchecked, it’ll be a horizontal slider.</p><p>See the <a href="{{ link:2bf54658-0549-4630-9dbf-9ff48f269b54 }}">Knobs section</a> above for descriptions of several additional properties.&nbsp;&nbsp;</p>'
template: documentation
fieldset: documentation
id: 811b7257-5dc8-4969-bd79-e1ef3c5ac8cd
