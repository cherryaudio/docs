title: Splitter
body:
  -
    type: text
    text: '<h1>SPLITTER</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_splitter.jpg
    alignment: left
  -
    type: text
    text: '<p>The Splitter module is a MIDI utility module for easily creating “split patches” where the upper and lower portions of a MIDI keyboard-controller send pitch, gate, and velocity MIDI and/or CVs to separate destinations. This can be used, for example, to play a bass sound with the lower keys while playing a lead sound with the upper keys. The split point can be set at any MIDI note and multiple instances of the module can be used to split the keyboard into any number of "zones."</p><h2><strong>Inputs, Outputs and Controls</strong></h2><p><strong>MIDI In jack</strong>- This is the MIDI input jack for the splitter. Typically this will be connected to the output of a MIDI keyboard via the&nbsp;<em>From Host</em>&nbsp;MIDI jack in the I/O panel or the&nbsp;<em>MIDI Out</em>&nbsp;jack of a&nbsp;<em>MIDI In</em>&nbsp;module.</p><p><strong>Learn / Split Point</strong>- The <em>Split Point </em>displays the MIDI note which separates the lower and upper portions of the keyboard and can be changed by clicking the <em>Learn</em> button (the button will turn red) and playing the desired note on the MIDI device patched to the <em>MIDI In</em> jack.</p><h3><strong>Lower section</strong></h3><p><strong>MIDI Out jack</strong>- All notes lower than the <em>Split Point</em> will be output from this MIDI jack.</p><p><strong>Pitch jack</strong>- All MIDI note-number messages lower than the split point are converted to pitch CVs and output from this jack.</p><p><strong>Gate jack</strong>- All MIDI note-on/off messages lower than the split point are converted to gate CVs and output from this jack.</p><p><strong>Velocity jack</strong>- All MIDI note-velocity messages lower than the split point are converted to CVs and output from this jack.</p><h3><strong>Upper Section</strong></h3><p><strong>MIDI Out jack</strong>- The <em>Split Point</em> note itself, and all notes higher, will be output from this MIDI jack. To create more than two “zones,” patch this output to another Splitter module’s <em>MIDI In</em> jack. The second module can then be used to split the first module’s upper half for a total of three zones. This can be repeated as many times as necessary to create additional zones.</p><p><strong>Pitch jack</strong>- All MIDI note-number messages at or above the split point are converted to pitch CVs and output from this jack.</p><p><strong>Gate jack</strong>- All MIDI note-on/off messages at or above the split point are converted to gate CVs and output from this jack.</p><p><strong>Velocity jack</strong>- All MIDI note-velocity messages at or above the split point are converted to CVs and output from this jack.</p>'
template: documentation
seo:
  description: 'The Splitter module is a MIDI utility-module for easily creating “split patches” where the upper and lower portions of a MIDI keyboard-controller send pitch, gate, and velocity MIDI and/or CVs to separate destinations.'
  image: /assets/social-modules/splitter.png
id: 14c89fc7-1bb1-4dc3-b447-0f90e0b9c501
slug: splitter
blueprint: documentation
