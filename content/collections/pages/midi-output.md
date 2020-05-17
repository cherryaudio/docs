title: 'MIDI Output'
body:
  -
    type: text
    text: '<h1>MIDI OUTPUT</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_midi-out.jpg
    alignment: left
  -
    type: text
    text: '<p>The Cherry Audio MIDI Output module allows modules with MIDI out jacks, such as the CV To MIDI and CV To MIDI CC Converter, to control external MIDI hardware devices. This means that any MIDI capable sound module, synthesizer, drum machine or effects unit can be part of your modular setup! Create sequences, arpeggios and complex modulations inside of Voltage Modular and send them via MIDI to all of your favorite hardware.</p><p>The MIDI Output module can be used to merge up to six MIDI inputs. If more than six inputs are needed, multiple instances can be set to the same external device and their MIDI data will be merged.<br></p><p>In the image below, four channels of MIDI are being sent to the <em>MIDI In</em> jack. The MIDI Output module will merge the data so they can be simultaneously output by one MIDI cable. This allows four external devices to be individually controlled while “daisy-chained” together.<br></p>'
  -
    type: image
    image:
      - /assets/modules/ug_midi-out-image1.jpg
    alignment: left
  -
    type: text
    text: '<h2><strong>Inputs, Outputs and Controls</strong></h2><p><strong>MIDI In jack</strong>- Modules with MIDI out jacks can be patched to this input to send their MIDI data to external MIDI devices. This jack can accept up to six MIDI inputs at once which will be merged and sent to the selected external MIDI device. The small LED next to the jack lights up when MIDI is being received.&nbsp;</p><p><strong>MIDI Channel</strong>- Selects the MIDI channel on which the data received at the <em>MIDI In</em> jack will be output. When set from one to sixteen, MIDI data from all channels will be merged and output on the selected channel. When set to <em>All, </em>each channel of MIDI will be output on the same channel that it was received.</p><p><strong>Transpose</strong>- Shifts the pitch of the output MIDI notes up or down as much as three octaves in semitone increments.</p><p><strong>Select MIDI Device</strong>- Click this button to select which external interface or port will be used to output MIDI data.&nbsp;</p><p><strong>Device Status</strong>- These two LEDs give visual feedback of the state of the selected external MIDI device. The <em>Active </em>LED will light up when the selected MIDI device is connected and working properly. The <em>Error </em>LED will light up if there is a problem with the MIDI device such as its connection being lost.</p>'
template: documentation
seo:
  description: 'The Cherry Audio MIDI Out module allows modules with MIDI out jacks, such as the CV To MIDI and CV To MIDI CC Converter, to control external MIDI hardware devices.'
  image: /assets/social-modules/midi-output.png
id: 3ba3e417-d1cb-4b6a-90a9-6eb4698954b2
slug: midi-output
blueprint: documentation
