title: 'MIDI Input'
body:
  -
    type: text
    text: '<h1>MIDI INPUT</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_midi-in.jpg
    alignment: left
  -
    type: text
    text: '<p>The Cherry Audio MIDI Input module receives MIDI messages sent from an external MIDI device and converts them to CV signals for use within Voltage Modular. Using this module in addition to the CV Outs section of the I/O panel makes it possible to route MIDI data from multiple external MIDI devices to different parts of a patch. An external sequencer could be used to play notes in one part of your patch while a midi keyboard controller is simultaneously used to play a different part of the patch.&nbsp;</p><h2>Inputs, Outputs and Controls</h2><p><strong>Select MIDI Device</strong>- Click this button to select which external interface or port will be used for MIDI input.&nbsp;</p><p><strong>Device Status</strong>- These two LEDs give visual feedback of the state of the selected external MIDI device. The <em>Active </em>LED will light up when the MIDI device is connected and working properly. The <em>Error </em>LED will light up if there is a problem with the MIDI device such as its connection being lost.<br></p><p><strong>MIDI Out jack</strong>- MIDI output for passing the MIDI data received by the selected input device to other MIDI modules within Voltage Modular such as the Arpeggiator or Poly Octave Oscillator. The small LED next to this jack lights up when MIDI is being sent from the output.&nbsp;<br></p><p><strong>Transpose</strong>- Shifts the pitch of the CV signals that are output from the <em>Pitch</em> jack up or down as much as three octaves in semitone increments.<br></p><p><strong>Trig (Single/Multi)</strong>- Defines how gate and&nbsp;trigger voltages behave when a key is struck while another key is held. In&nbsp;<em>Single</em>&nbsp;mode, a new gate and trigger voltage will not be sent until all previously held keys are released. In&nbsp;<em>Multi</em>&nbsp;mode, new gate and trigger voltages are sent any time a new key is played. (Because the gate voltage is already "high," it will very briefly dip to zero volts when a new key is struck in order to let the module know to retrigger.)<br></p><p><strong>Pitch</strong>- MIDI note number data is converted to a pitch CV signal and output from this jack. Typically this will be patched to the Keyb CV jack of an oscillator.&nbsp;<br></p><p><strong>Gate</strong>- MIDI note on/off messages are converted to gate CV signals and output from this jack. This is often patched to the Gate In jack of an envelope generator to control a sound’s amplitude and/or filter settings.&nbsp;<br></p><p><strong>Vel</strong>- MIDI note velocity (how hard a key is pressed) values 0 - 127 are converted to CVs between 0V and 5V and output at this jack.&nbsp;<br></p><p><strong>Bend</strong>- MIDI pitch bend messages are converted to CVs ranging from -5V (all the way down) to 5V (all the way up) and output at this jack.&nbsp;<br></p><p><strong>Mod Whl</strong>- Mod wheel (MIDI CC# 1) values 0 - 127 are converted to CVs from 0V - 5V and output at this jack.&nbsp;<br></p><p><strong>After Touch</strong>- MIDI After touch (channel pressure) values 0 - 127 are converted to CVs from 0V - 5V and output at this jack.&nbsp;<br></p><p><strong>Sus</strong>- Sustain (MIDI CC# 64) on/off messages are converted to a CV gate signal and output from this jack.&nbsp;<br></p>'
template: documentation
seo:
  description: 'Converts the output of any external MIDI hardware device to CVs for pitch, gate, velocity, pitch bend, mod wheel, and aftertouch.'
  image: /assets/social-modules/midi-input.png
fieldset: documentation
id: 54e8b08f-eeca-48ff-a7cc-087beec3ca05
