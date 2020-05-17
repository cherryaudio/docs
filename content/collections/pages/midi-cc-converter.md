title: 'MIDI CC Converter'
body:
  -
    type: text
    text: '<h1>MIDI CC CONVERTER</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_midi-cc-converter.jpg
    alignment: left
  -
    type: text
    text: '<p>The MIDI CC Converter module converts eight selectable MIDI CC (continuous controller) messages from external MIDI devices to individual CV signals for use within Voltage Modular. This allows a hardware device’s knobs and buttons to be used as CV sources.</p><h2><strong>Inputs, Outputs and Controls</strong></h2><p><strong>MIDI Channel</strong>- Selects which MIDI channel the module will receive MIDI CC messages on.&nbsp; Set this to the same channel that your external device or devices are transmitting MIDI on. When set to <em>All, </em>CC messages from all 16 MIDI channels will be received allowing the module to convert CCs from multiple devices on different channels.</p><p><strong>MIDI In jack</strong>- Receives MIDI messages from external MIDI devices. Typically this will be connected to the <em>From Host</em> MIDI output on the I/O panel or the <em>MIDI Out</em> jack of a MIDI In module.</p><p><strong>MIDI CC#</strong>- Selects which MIDI CC (0 - 127) will be converted to a CV signal. Clicking on the small arrow to the right of the number display opens a pop-up menu of the standardized CC message assignments to pick from. Keep in mind that every piece of hardware will transmit different CC messages so it is usually easiest to refer to the MIDI implementation chart of your device or use the MIDI Learn function to find the number you are looking for.&nbsp;</p><ul><li>To find the CC# using the MIDI Learn function, right-click on any knob and select <em>MIDI Learn</em>,<em> </em>turn the knob you want to use, then look in the MIDI tab to see which CC# it transmitted. Once you know the number, you can remove the MIDI assignment by right-clicking on it in the MIDI menu and selecting <em>Unlearn</em>.</li></ul><p>Many MIDI controllers allow you to assign any CC# to any knob or button so don’t worry too much about what the list says. If a knob on your controller transmits CC# 5, it doesn’t mean you have to use it to control portamento time.</p><p><strong>CV Out jacks</strong>- Each jack outputs a CV signal for its respective MIDI CC#. MIDI CC values from 0 - 127 are converted to voltage between 0V and 5V. If no messages are received by the selected MIDI CC, no voltage will be output.<br></p>'
template: documentation
seo:
  description: 'The MIDI CC Converter module converts eight selectable MIDI CC (continuous controller) messages from external MIDI devices to individual CV signals for use within Voltage Modular.'
  image: /assets/social-modules/midi-cc-converter.png
id: dc3aa68b-f0bb-49f2-ab06-6478433cb675
slug: midi-cc-converter
blueprint: documentation
