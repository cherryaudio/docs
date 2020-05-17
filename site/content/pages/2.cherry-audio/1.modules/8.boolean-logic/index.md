title: 'Boolean Logic'
body:
  -
    type: text
    text: '<h1>BOOLEAN LOGIC</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_boolean-logic.jpg
    alignment: left
  -
    type: text
    text: '<p>The Boolean Logic module is a dual module that combines two incoming gate signals using the common boolean functions AND, NAND, NOR, OR, XOR, and XNOR.</p><p>Each function creates a different gate-signal output based on the state of the two input signals. Using only one input will give the same result as combining it with a second input that is always "off." A signal is considered to be "on" when its voltage is 2.5V or higher and "off" when lower than 2.5V. The result of each function is based on the rules that define it:</p><ul><li>AND only outputs a gate signal when both inputs are "on."&nbsp;<br></li><li>OR outputs a gate signal whenever either one of the two inputs is "on."&nbsp;<br></li><li>XOR (exclusive OR) outputs a gate when only one, but not both, of the inputs is "on."<br></li></ul><p>The N (not) version of each function will create the same gate signal only inverted.</p><h3>Let''s look at a couple examples of how this might be used:</h3><p>In the example below, the AND function is used to combine the gate out signal from a running sequencer and the gate signal from a keyboard so that the sequencer''s gate pattern will only be output while a key is held down.</p>'
  -
    type: image
    image:
      - /assets/screenshots/ug_boolean-image3.jpg
    alignment: left
  -
    type: text
    text: '<p>In this example, a gate signal from the CV Outs section of the I/O Panel is patched to one of the inputs of both modules. The top module function is set to OR and the bottom module is set to XNOR. This setup will trigger the sequencer to start when a key is pressed and stop as soon as all keys are released.</p>'
  -
    type: image
    image:
      - /assets/screenshots/ug_boolean-image1.jpg
    alignment: left
  -
    type: text
    text: '<h2>Inputs, Outputs, and Controls</h2><p><strong>In jacks</strong>- These are input jacks for the two gate signals that will be combined.</p><p><strong>Functions</strong>- There are six possible boolean functions that can be used to combine the two inputs:</p><ul><li><strong>AND (and)</strong>- While both input signals are "on" a gate signal will be sent to the output.<br></li><li><strong>NAND (not and)</strong>- While both input signals are "off" a gate signal will be sent to the output.<br></li><li><strong>NOR (not or)</strong>- While neither input signal is "on" a gate signal will be sent to the output.<br></li><li><strong>OR (or)</strong>- While either or both input signals are "on" a gate signal will be sent to the output.<br></li><li><strong>XOR (exclusive or)</strong>- While either, but not both, input signals are "on" a gate signal will be sent to the output.<br></li><li><strong>NXOR (not exclusive or)</strong>- While neither or both input signals are "on" a gate signal will be sent to the output.<br></li></ul><p><strong>Out jack</strong>- Outputs a 5V gate signal whenever the selected function tests true.</p>'
template: documentation
seo:
  description: 'The Boolean Logic module is a dual module that combines two incoming gate signals using the common boolean functions AND, NAND, NOR, OR, XOR, and XNOR.'
  image: /assets/social-modules/boolean-logic.png
fieldset: documentation
id: f39ed081-e9ac-450f-a1d1-15886104e6dc
