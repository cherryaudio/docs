title: 'Plug-In Host'
body:
  -
    type: text
    text: '<h1>PLUG-IN HOST</h1>'
  -
    type: image
    image:
      - /assets/screenshots/ug_plug_in_host.jpg
    alignment: left
  -
    type: text
    text: '<p>The Plug-In Host module lets you use almost any virtual instrument or effect plug-in "inside" of Voltage Modular and allows CV control of up to 12 plug-in parameters. It includes four audio ins and outs as well as MIDI I/O.</p><p>In this guide, we''ll interchangeably refer to virtual instruments and effects plug-ins simply as "plug-ins" to save me some typing and you some reading.</p><h2>The Big Disclaimer</h2><p>We''ve tested Plug-In Host with many plug-ins, and in most cases, it performs fabulously well, but be aware that not all plug-ins will play nice with it.</p><ul><li>If individual plug-ins use a shell host, you may not be able to load them.<br></li><li>Controls for some plug-ins won''t appear in the <em>Parameter Select</em>&nbsp;menu.<br></li><li>Because some developers use non-standard preset browsers, presets may not appear in the <em>Preset Select</em>&nbsp;window.<br></li><li>Some plug-ins may crash our system, but we''re continually working to improve third-party plug-in support.<br></li></ul><h2>Top Buttons</h2><p><strong>Active</strong>- This is the "on/off" switch. Green is on, gray is off. In off mode, virtual instruments won''t make any sound, and plug-ins will pass signals unaffected.</p><p><strong>Select Plug-In</strong>- Use this to choose an instrument or effect. When clicked, you''ll see a sub-menu with instrument and effects types <em>(Audio Units, VST, VST3</em> - depending on whether you''re using Windows or OS X). Choosing the desired type will automatically navigate to the appropriate folder where plug-ins can be selected.</p><p><strong>View Editor</strong>- Opens the editor window for the selected instrument or plug-in. Edit windows can be closed by clicking the <em>View Editor</em> button again or by clicking the <em>X</em>&nbsp;in the top-left corner of the plug.</p><p><strong>Latency</strong>- Just like the audio latency setting in DAWs, lower settings result in quicker processing and snappier performance, but require more computer processing power. As with audio hardware, the general rule is to set this as low as possible until you start hearing crackling noises, but the default setting of 128 samples should work well for most applications.</p>'
  -
    type: image
    image:
      - /assets/screenshots/ug_plug_in_host_presetpopmenu.jpg
    alignment: left
  -
    type: text
    text: '<p><strong>Preset Select</strong>- The left/right arrow buttons can be used to cycle through a plug-in''s presets. Clicking in the black area to the right of the selection arrows also opens a pop-up menu displaying all presets for the plug-in.</p><p>Please keep in mind that presets won''t be visible if the plug-in developer uses a proprietary preset browser implementation; presets will only be displayed if the plug-in uses the standard Windows or OS X plug-in preset browser.</p><h2>Inputs</h2><p><strong>MIDI</strong>- You''ll typically play virtual instruments by patching the I/O Panel <em>MIDI From Host</em>&nbsp;MIDI output to the Plug-In Host <em>MIDI</em> input jack.</p><p>If you''d like to play a virtual instrument using CV''s from a sequencer or other source within Voltage, use the <strong>CV To MIDI</strong>&nbsp;module (or the <strong>CV To MIDI CC Converter</strong>&nbsp;for transmitting MIDI CC data).</p><p><strong>Audio Inputs</strong>- Use these for routing audio into an effects plug-in. Usually the <em>1L</em>&nbsp;and <em>1R</em>&nbsp;inputs are all you''ll need, but we''ve provided a second set of inputs as well.</p><h2>Outputs</h2><p><strong>MIDI</strong>- A MIDI out for plug-ins that use it, typically arpeggiators and some virtual instruments with on-screen keyboards.</p><p><strong>Audio Outputs</strong>- The plug-in''s audio outs. A second set of outputs is included for multi-out instruments and plug-ins.</p><h2>Parameter Control Slots</h2>'
  -
    type: image
    image:
      - /assets/screenshots/ug_plug_in_host_paramslot.jpg
    alignment: left
  -
    type: text
    text: '<p>We''ve arrived at the fun part! Not only do these allow 12 plug-in parameters to be "remote-controlled," but each slot includes a CV in jack and bipolar attenuator. This allows CV control of any parameter of any plug-in, which is kind of awesome.</p><p><strong>CV Amount knob</strong> - Attenuates and/or inverts incoming control voltages. Center position is zero. Turning the knob right applies positive voltage, turning the knob to the left applies negative voltage.</p><p><strong>CV In jack</strong>&nbsp;- Patch incoming CV''s to this jack.</p><p><strong>Parameter Amount</strong> - Sets the initial amount for mapped plug-in parameters. Once mapped, it acts as a "remote control" for the selected parameter, but keep in mind that that it only communicates one way, i.e. moving the control in the plug-in''s interface will <strong>not</strong>&nbsp;move the <em>Parameter Amount</em>&nbsp;knob, but moving the <em>Parameter Amount</em>&nbsp;knob <strong>will</strong>&nbsp;move the control in the plug-in interface.</p><p><strong>Parameter Select button</strong> - Click this to assign plug-in parameters to control slots. A single mouse click displays all of the plug-in''s parameters; clicking on one assigns it. Parameters can also be assigned using Plug-In Host''s <em>Learn</em>&nbsp;function.</p><p>To learn a control, select <em>Learn</em>&nbsp;from the pop-up menu (if the plug-in editor window is currently hidden, the menu will say <em>View Editor and Learn</em>; this initiates learn mode and opens the plug-in editor window). The <em>Parameter Select</em>&nbsp;button will say <em>LEARNING</em>&nbsp;in red; simply move the control you''d like to assign in the plug-in interface to instantly assign it to the current control slot. Learn mode will automatically disengage.</p><p><em><strong>Learning vs. direct assignment</strong>: Generally speaking, for plug-ins with a just a few parameters, it''s fastest to assign controls by simply clicking the Parameter Select button and clicking the desired parameter, but for plug-ins with dozens of parameters, Learn mode greatly simplifies parameter assignment.</em></p><p>To clear control assignments and intialize a parameter control slot, click the <em>Parameter Select</em>&nbsp;and choose <em>None</em>.</p>'
template: documentation
seo:
  description: 'Plug-In Host module lets you use almost any virtual instrument or effect plug-in "inside" of Voltage Modular and allows CV control of 12 plug-in parameters.'
  image: /assets/social-modules/plug-in-host.png
id: 33dcea7d-ae78-4fd4-8336-e04144c66317
slug: plug-in-host
blueprint: documentation
