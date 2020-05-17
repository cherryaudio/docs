title: 'CV To MIDI CC Converter'
body:
  -
    type: text
    text: '<h1>CV TO MIDI CC CONVERTER</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_cv-to-midi-cc-converter.jpg
    alignment: left
  -
    type: text
    text: '<p>The CV To MIDI CC Converter module converts up to four incoming CV signals to assignable MIDI CC (continuous controller) messages that can be used to control external hardware such as a synthesizer or drum machine. The four MIDI CCs are output on the selected MIDI channel and can be sent to external hardware using a MIDI Out module.&nbsp;</p><h2>Inputs, Outputs and Controls</h2><p><strong>CV In jacks</strong>- Input jacks for the CV signals that will be converted to MIDI CC messages.&nbsp; Voltage from 0V to 5V will be converted to CC values 0 - 127.&nbsp;</p><p><strong>MIDI CC#</strong>- selects which MIDI CC (continuous controller) number the CV signals will be converted to. MIDI CCs are used to control parameters on hardware equipment. A synthesizer, for example, may have a filter cutoff knob which can be externally controlled via MIDI CC# 102. Any CV signal from within Voltage Modular, be it an LFO, envelope, or sequence, can be converted to MIDI CC# 102 and used to control the synth’s filter cutoff frequency. Refer to your hardware’s user manual or MIDI implementation chart to determine which CC#s control its parameters.&nbsp;<br></p><p><strong>MIDI Channel</strong>- Selects which MIDI channel (1- 16) the CC messages will be output on. Make sure your external hardware is set up to receive MIDI on the same channel as you designate here.&nbsp;<br></p><p><strong>MIDI Out</strong>- Outputs all four CC messages on a single MIDI channel for controlling external hardware. Connect this to the input of a MIDI Out module and click its <em>Select MIDI Device </em>button to choose which external MIDI output to use.&nbsp;<br></p>'
template: documentation
seo:
  description: 'The CV To MIDI CC Converter module converts up to four incoming CV signals to assignable MIDI CC (continuous controller) messages that can be used to control external hardware such as a synthesizer or drum machine.'
  image: /assets/social-modules/cv-to-midi-cc-converter.png
fieldset: documentation
id: 0c8599ee-e693-4e75-aade-785c5a6d918c
