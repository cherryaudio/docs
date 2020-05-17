title: Binary
body:
  -
    type: text
    text: '<h1>BINARY</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_binary.jpg
    alignment: left
  -
    type: text
    text: '<p>The Binary module is a dual module that continuously tests an incoming audio or control signal to determine if its voltage is greater than zero (&gt; 0) or less than zero (&lt; 0) and outputs a selected voltage whenever the condition is true. The output will always be a binary signal, meaning it is either on (outputting the selected voltage) or off. It basically creates a series of gate signals which can be used to turn things on and off, trigger envelopes, step through sequencers etc.</p><p>One of the coolest things about modular synthesis and Voltage Modular is the ability to create unique relationships between modules so that they “react” to one another. The Binary module can “automatically” trigger an event or action based on other signals already present within a patch. It could be used, for example, to send only higher notes of an arpeggiator to a reverb send or change a drum sequencer’s pattern every time an LFO passes zero.</p><h2>Inputs, Outputs and Controls</h2><p><strong>&nbsp;&gt; 0 and &lt; 0 In jacks</strong>- Input jack for the audio or control signal whose voltage will be tested. The top module tests whether or not the signal is above zero and the bottom module tests whether or not it is below zero.</p><ul><li><strong>Pro Tip</strong>:&nbsp;A DC Source module can be used to offset the input signal’s voltage making it possible to test if a signal is above or below voltages other than zero.<br></li></ul><p><strong>-5V to +5V and LEDs</strong>- This knob selects the voltage that will be output any time the tested condition is true. The green LED shows that the condition is true while the red LED indicates that it is false.</p><p><strong>Out jack</strong>- Output jack for the binary signal created. If both modules are testing the same input signal, the outputs will alternate outputting voltage and can be combined to create a square wave made up of both selected voltages.</p>'
template: documentation
seo:
  description: 'Binary module module tests an incoming signal to determine if its voltage is positive or negative and outputs a selected voltage whenever the condition is true.'
  image: /assets/social-modules/binary.png
fieldset: documentation
id: 94c3570f-eacb-4e72-951f-372f382cd037
