---
title: 'EG Station'
categories: envelope-generators
body:
  -
    type: paragraph
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - ug_EGstat_all.jpg
        alignment: left
        add_shadow: false
  -
    type: paragraph
    content:
      -
        type: text
        text: 'EG Station features eight fully independent ADSR envelope generators. Though it''s intended for use with the Cherry Audio '
      -
        type: text
        marks:
          -
            type: italic
        text: 'FM Station '
      -
        type: text
        text: 'oscillator module, it can be used with any modules in Voltage. It packs a lot of envelopes into a relatively compact footprint and features velocity CV inputs allowing control of envelope intensity. '
  -
    type: heading
    attrs:
      level: 2
    content:
      -
        type: text
        text: 'How ADSR Envelope Generators Work'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'If you''re not familiar with the operation of standard envelope generators, here''s how they work: when a gate voltage is sent to one of the '
      -
        type: text
        marks:
          -
            type: italic
        text: Gate
      -
        type: text
        text: "\_jacks, the envelope generator outputs a voltage that changes dynamically according to its  four stage settings."
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - UG_EGstation_diagram.jpg
        alignment: left
        add_shadow: false
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: italic
        text: Attack
      -
        type: text
        text: "\_stage defines how long it takes for the output voltage to rise from 0 to 5 volts. Once the attack stage reaches 5V, it moves to the "
      -
        type: text
        marks:
          -
            type: italic
        text: Decay
      -
        type: text
        text: "\_phase, which defines how long it takes to fall from 5V to the setting of the "
      -
        type: text
        marks:
          -
            type: italic
        text: Sustain
      -
        type: text
        text: "\_phase. Unlike the "
      -
        type: text
        marks:
          -
            type: italic
        text: Attack
      -
        type: text
        text: ', '
      -
        type: text
        marks:
          -
            type: italic
        text: Decay
      -
        type: text
        text: ', and '
      -
        type: text
        marks:
          -
            type: italic
        text: Release
      -
        type: text
        text: "\_phases, each of which define a time, "
      -
        type: text
        marks:
          -
            type: italic
        text: Sustain
      -
        type: text
        text: "\_ sets the held voltage level following the "
      -
        type: text
        marks:
          -
            type: italic
        text: Attack
      -
        type: text
        text: "\_and "
      -
        type: text
        marks:
          -
            type: italic
        text: Decay
      -
        type: text
        text: "\_phases - this usually equates to the envelope output level while holding down a key on a keyboard controller. Finally, the "
      -
        type: text
        marks:
          -
            type: italic
        text: Release
      -
        type: text
        text: "\_knob defines the the length of time it takes for the voltage to fall back to 0V when the gate input voltage is removed (typically when you let go of a key on a keyboard controller)."
  -
    type: heading
    attrs:
      level: 2
    content:
      -
        type: text
        text: 'Inputs, Outputs, and Controls'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Control Bars and CV Indicator Bars'
      -
        type: hard_break
        marks:
          -
            type: bold
      -
        type: text
        text: "EG Station's main controls are a bit of a departure from other Cherry Audio modules. Instead of standard knobs or sliders, its main controls are colored illuminated bars. These work just like the slider controls in other modules. To change values, grab the control bar at its top edge and move it or click anywhere in the control travel to jump to the setting (this is helpful when the control is set to minimum; you won't have to precisely click the tiny visible region of the bar). Hovering the mouse on a control bar causes it to light up. The controls bars behave the same as any standard Voltage slider control- right-clicking them allows all standard operations including Perform and MIDI controller assignments.\_ "
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The control bars are color-coded to match the '
      -
        type: text
        marks:
          -
            type: italic
        text: 'FM Station'
      -
        type: text
        text: ' module''s four operator sections, but otherwise each of the envelopes are functionally identical. '
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Gate jacks (normalled)'
      -
        type: text
        text: '- This is where you''ll patch gate voltages to initiate an envelope generator cycle. The connection from the IO Panel '
      -
        type: text
        marks:
          -
            type: italic
        text: Gate
      -
        type: text
        text: ' CV out is semi-normalled to all eight of EG Station''s '
      -
        type: text
        marks:
          -
            type: italic
        text: Gate
      -
        type: text
        text: ' inputs - in other words, even though there are no visible cables, it''s automatically connected "under the hood." We think you''ll find this makes using EG Station really fast and easy - it also dramatically reduces cable clutter. '
      -
        type: hard_break
      -
        type: hard_break
      -
        type: text
        text: 'If a cable or a cable bus is connected to a '
      -
        type: text
        marks:
          -
            type: italic
        text: Gate
      -
        type: text
        text: ' input jack, the IO Panel connection is overridden for that jack (i.e., disconnected). This is useful if you don''t want to use the IO Panel '
      -
        type: text
        marks:
          -
            type: italic
        text: Gate
      -
        type: text
        text: ' jack output; when using a sequencer, for example. '
  -
    type: bullet_list
    content:
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: bold
                text: "Can I use a \"trigger\" to trigger an envelope generator?\_"
              -
                type: text
                text: 'It would seem logical, but the answer is, "sometimes, but generally, no." First let''s clarify the difference between a gate signal and a trigger signal:'
          -
            type: bullet_list
            content:
              -
                type: list_item
                content:
                  -
                    type: paragraph
                    content:
                      -
                        type: text
                        text: 'A '
                      -
                        type: text
                        marks:
                          -
                            type: bold
                        text: gate
                      -
                        type: text
                        text: ' is a '
                      -
                        type: text
                        marks:
                          -
                            type: italic
                        text: constant
                      -
                        type: text
                        text: "\_voltage. If you're playing a keyboard, it remains high (i.e. +5V) as long as the key is held down.\_"
              -
                type: list_item
                content:
                  -
                    type: paragraph
                    content:
                      -
                        type: text
                        text: 'A '
                      -
                        type: text
                        marks:
                          -
                            type: bold
                        text: trigger
                      -
                        type: text
                        text: ' is a '
                      -
                        type: text
                        marks:
                          -
                            type: italic
                        text: 'rapid spike'
                      -
                        type: text
                        text: ' of +5V. It''s useful for a number of things (like turning stuff on and off, or triggering "one-shot" drum sounds or modules).'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'With this in mind, EG Station needs to see a constant gate voltage to move through the '
      -
        type: text
        marks:
          -
            type: italic
        text: Attack
      -
        type: text
        text: "\_and "
      -
        type: text
        marks:
          -
            type: italic
        text: Decay
      -
        type: text
        text: "\_phases and hold during the "
      -
        type: text
        marks:
          -
            type: italic
        text: Sustain
      -
        type: text
        text: "\_phase. Removing the gate voltage following the "
      -
        type: text
        marks:
          -
            type: italic
        text: Sustain
      -
        type: text
        text: "\_phase tells it to move to the "
      -
        type: text
        marks:
          -
            type: italic
        text: Release
      -
        type: text
        text: "\_stage. Conversely, using a trigger signal will cause the envelope generator to "
      -
        type: text
        marks:
          -
            type: italic
        text: immediately
      -
        type: text
        text: "\_jump to the "
      -
        type: text
        marks:
          -
            type: italic
        text: Release
      -
        type: text
        text: "\_phase."
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Velocity jacks (normalled)'
      -
        type: text
        text: '- This CV in jack allows the overall voltage output of the envelope to be controller via CV. Like the '
      -
        type: text
        marks:
          -
            type: italic
        text: Gate
      -
        type: text
        text: ' jacks, all eight '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Vel '
      -
        type: text
        text: 'CV inputs are semi-normalled to the IO Panel '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Vel '
      -
        type: text
        text: 'CV outputs, so they don''t need to be patched to function. The IO panel connections can be individually overridden by plugging poly cables into them. Velocity CV intensity is controlled by the '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Vel '
      -
        type: text
        text: 'control bar. '
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - ug_EGstat_envIcon.jpg
        alignment: left
        add_shadow: false
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Envelope Outs '
      -
        type: text
        text: '- The envelope voltage outputs have an envelope icon beneath them. Their output voltage ranges from 0V to +5V.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: '"A" (Attack) control bar'
      -
        type: text
        text: '- Defines the length of time for voltage to rise from 0V to 5V when the gate voltage is applied.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: '"D" (Decay) control bar'
      -
        type: text
        text: '- Defines the length of time for voltage to fall from the '
      -
        type: text
        marks:
          -
            type: italic
        text: Attack
      -
        type: text
        text: "\_stage 5V peak to "
      -
        type: text
        marks:
          -
            type: italic
        text: Sustain
      -
        type: text
        text: "\_stage setting."
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: '"S" (Sustain) control bar'
      -
        type: text
        text: '- Sets the held voltage level following '
      -
        type: text
        marks:
          -
            type: italic
        text: Attack
      -
        type: text
        text: "\_and "
      -
        type: text
        marks:
          -
            type: italic
        text: Decay
      -
        type: text
        text: "\_phases."
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: '"R" (Release) control bar'
      -
        type: text
        text: '- Defines the length of time for voltage to fall from '
      -
        type: text
        marks:
          -
            type: italic
        text: Sustain
      -
        type: text
        text: "\_level to 0V when gate is released."
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Velocity control bar'
      -
        type: text
        text: '- This an attenuator controlling the intensity of CV from the '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Vel '
      -
        type: text
        text: 'CV jack. Moving the bar up from middle position adds positive CV input.'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'This '
      -
        type: text
        marks:
          -
            type: italic
        text: Velocity
      -
        type: text
        text: ' bar also displays an unfilled rectangle that displays incoming velocity CV in real-time. '
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: italic
        text: A
      -
        type: text
        text: ', '
      -
        type: text
        marks:
          -
            type: italic
        text: D
      -
        type: text
        text: ', '
      -
        type: text
        marks:
          -
            type: italic
        text: S
      -
        type: text
        text: ', and '
      -
        type: text
        marks:
          -
            type: italic
        text: R
      -
        type: text
        text: ' control bars illuminate to indicate the currently active envelope stage.  The '
      -
        type: text
        marks:
          -
            type: italic
        text: A
      -
        type: text
        text: ', '
      -
        type: text
        marks:
          -
            type: italic
        text: D
      -
        type: text
        text: ', '
      -
        type: text
        marks:
          -
            type: italic
        text: S
      -
        type: text
        text: ', '
      -
        type: text
        marks:
          -
            type: italic
        text: 'R, '
      -
        type: text
        text: 'and '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Velocity '
      -
        type: text
        text: 'control bars also illuminate when the mouse is hovering over them.'
template: modules
updated_at: 1594480943
updated_by: 8e971c27-4141-4dd8-b8ef-f0a8bfc35d61
blueprint: modules
id: 4243a536-a9d7-4805-a4ac-68779bed986c
---
