title: 'MIDI Output'
body:
  -
    type: text
    text: '<h1>MIDI OUT</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_midi-out.jpg
    alignment: left
  -
    type: text
    text: '<p>The Cherry Audio MIDI Out module allows modules with MIDI out jacks, such as the CV To MIDI and CV To MIDI CC Converter, to control external MIDI hardware devices. This means that any MIDI capable sound module, synthesizer, drum machine or effects unit can be part of your modular setup! Create sequences, arpeggios and complex modulations inside of Voltage Modular and send them via MIDI to all of your favorite hardware gear.</p><p>The MIDI Out module can be used to merge up to six channels of MIDI. The MIDI protocol allows up to 16 channels of MIDI data to be transmitted over one cable. If more than six channels are needed, multiple instances can be set to the same external device and their MIDI data will be merged.<br></p><p>In the image below, four channels of MIDI are being sent to the <em>MIDI In</em> jack. The MIDI Out module will merge the data so they can be simultaneously output by one MIDI cable. This allows four devices to be individually controlled while “daisy-chained” together.<br></p>'
  -
    type: image
    image:
      - /assets/modules/ug_midi-out-image1.jpg
    alignment: left
  -
    type: text
    text: '<h2><strong>Inputs, Outputs and Controls</strong></h2><p><strong>MIDI In jack</strong>- Modules with MIDI out jacks can be patched to this input to send their MIDI data to external MIDI devices. This input can accept up to six MIDI cables at once. The inputs will be merged and sent to the selected external MIDI device.</p><p><strong>MIDI Channel</strong>- Selects the MIDI channel on which the data received at the <em>MIDI In</em> jack will be output. When set from one to sixteen, MIDI data from all channels will be merged and output on the selected channel. When set to <em>All, </em>each channel of MIDI will be output on the same channel that it was received.</p><p><strong>Transpose</strong>- Shifts the pitch of the output MIDI notes as much as three octaves up or down in semitone increments.</p><p><strong>Select MIDI Device</strong>- Click this button to select which external interface or port will be used to output MIDI data.&nbsp;</p><p><strong>Device Status</strong>- These two LEDs give visual feedback of the state of the selected external MIDI device. The <em>Active </em>LED will light up when the selected MIDI device is connected and working properly. The <em>Error </em>LED will light up if there is a problem with the MIDI device such as its connection being lost.</p>'
template: documentation
fieldset: documentation
id: 34e5f67f-2ee5-49b1-82e4-3d5c89cc5c9d
