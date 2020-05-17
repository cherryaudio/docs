title: 'CV To MIDI'
body:
  -
    type: text
    text: '<h1>CV To MIDI</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_cv-to-midi.jpg
    alignment: left
  -
    type: text
    text: '<p>The CV To MIDI module converts incoming CVs for pitch, gate, velocity, pitch bend, mod wheel and aftertouch into MIDI data that can be used to control external hardware such as synthesizers or drum machines. Incoming pitch CVs can be transposed as much as three octaves up or down in semitone increments and the MIDI channel on which the data will be transmitted is assignable.</p><p>To send pitch and gate CVs from an Eight-Step Sequencer module to an external MIDI synthesizer, connect the sequencer’s <em>Output</em> and <em>Gate Out</em> jacks to the CV To MIDI module’s <em>Pitch</em> and <em>Gate</em> input jacks respectively. Then connect the <em>MIDI Out</em> jack of the CV To MIDI module to the <em>MIDI In</em> jack of a MIDI Out module and click its <em>Select MIDI Device</em> button to choose which external output to use. Make sure your synth is set to receive MIDI on the same channel as the CV To MIDI module and you should be all set! (Note that if the MIDI Out module is set to a MIDI channel other than “All”, the data will be output on that channel overriding the CV To MIDI module’s channel setting.)<br></p><h2><strong>Inputs, Outputs and Controls</strong></h2><p><strong>Pitch</strong>- Input jack for receiving pitch CVs that will be converted to MIDI note number messages.</p><p><strong>Gate</strong>- Input jack for receiving gate CVs that will be converted to MIDI note on/off messages.</p><p><strong>Vel</strong>- Input jack for receiving CVs that will be converted to MIDI velocity messages. The CV that is present at this input jack when a gate signal is received will be assigned as the velocity value of the MIDI note.</p><p><strong>Bend</strong>- Input jack for receiving CVs that will be converted to MIDI pitch bend messages. Voltage from -5V to 5V will be mapped across to the pitch bend range.</p><p><strong>Mod Whl</strong>- Input jack for receiving CVs that will be converted to MIDI mod wheel messages. Voltage from 0V to 5V will be converted to MIDI CC #1 values 0 - 127.</p><p><strong>After Touch</strong>- Input jack for receiving CVs that will be converted to MIDI aftertouch (channel pressure) messages. Voltage from 0V to 5V will be converted to MIDI channel pressure values 0 - 127.</p><p><strong>Transpose</strong>- Shifts the pitch of the MIDI notes up or down in semitone increments. The MIDI can be transposed as much as three octaves in either direction.</p><p><strong>MIDI Channel</strong>- Selects the MIDI channel on which the converted MIDI messages will be output.&nbsp;</p><p><strong>MIDI Out</strong>- Connect this MIDI jack to the input of a MIDI Out module to send MIDI to external software or hardware.</p>'
template: documentation
seo:
  description: 'The CV To MIDI module converts incoming CVs for pitch, gate, velocity, pitch bend, mod wheel and aftertouch into MIDI data that can be used to control external hardware such as synthesizers or drum machines.'
  image: /assets/social-modules/cv-to-midi.png
id: cf46eee8-a349-4884-a9fa-feb0fa4a22a9
slug: cv-to-midi
blueprint: documentation
