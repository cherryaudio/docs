---
title: 'Super Envelope Generator'
body:
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - superEnv.png
        alignment: left
        add_shadow: false
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Cherry Audio’s Super Envelope Generator is the dream-come-true envelope for modular synthesists. It starts with a complex DAHDSR envelope (Delay-Attack-Hold-Decay-Sustain-Release). The shapes of the '
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
        text: ' stages are individually controllable, morphing from logarithmic to linear to exponential, and these shapes can all be modulated via control voltage. On top of that, the length of each stage (and the sustain level) is CV-controllable as well! Powerful visual feedback is provided every step of the way, so you can see at a glance what''s happening with your envelope generator in real-time.'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'We are going to assume that you understand how a standard ADSR envelope works. If you are unfamiliar with envelopes in general or need a recap, please check out the documentation for the standard '
      -
        type: text
        marks:
          -
            type: link
            attrs:
              href: 'https://docs.cherryaudio.com/cherry-audio/modules/envelope-generator'
              target: _blank
              rel: null
        text: 'Envelope Generator'
      -
        type: text
        text: ' which goes over the basics in detail.'
  -
    type: heading
    attrs:
      level: '2'
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'DAHDSR Sliders'
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - ug_polySuperEnvGen_DAHDSRsliders-1593216495.jpg
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
        text: '"D" (Delay) slider'
      -
        type: text
        text: '- This is the first stage of the envelope and defines the length of time (after receiving a gate signal) the envelope will remain at 0V before starting the '
      -
        type: text
        marks:
          -
            type: italic
        text: Attack
      -
        type: text
        text: ' phase.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: '"A" (Attack) slider'
      -
        type: text
        text: '- Defines the length of time it takes for voltage to rise from 0V to 5V.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: '“H" (Hold) slider'
      -
        type: text
        text: '- Defines how long the envelope will remain at 5V before starting the envelope’s '
      -
        type: text
        marks:
          -
            type: italic
        text: Decay
      -
        type: text
        text: ' phase.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: '"S" (Sustain) slider'
      -
        type: text
        text: "- Sets the held voltage level (sustain level) following\_the "
      -
        type: text
        marks:
          -
            type: italic
        text: Decay
      -
        type: text
        text: "\_phase.\_"
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: '"R" (Release) slider'
      -
        type: text
        text: "- Defines the length of time for voltage to fall from\_"
      -
        type: text
        marks:
          -
            type: italic
        text: Sustain
      -
        type: text
        text: "\_level to 0V when the gate is released."
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'LED stage indicators'
      -
        type: text
        text: '- These illuminate to show the currently active envelope stage.'
  -
    type: paragraph
    content:
      -
        type: hard_break
  -
    type: heading
    attrs:
      level: '5'
    content:
      -
        type: text
        marks:
          -
            type: italic
        text: 'Below is a diagram of a DAHDSR envelope to help clarify the individual stages.'
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - modules/ug_super-envelope-generator-dahdsr.jpg
        alignment: left
        add_shadow: false
  -
    type: heading
    attrs:
      level: '2'
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'DAHDSR CV Control'
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - ug_SuperEnvGen_stageCV-1593216520.jpg
        alignment: left
        add_shadow: false
  -
    type: paragraph
    content:
      -
        type: text
        text: "Each of the DAHDSR sliders can be CV-controlled using their respective CV input jack and bipolar attenuator. When controlling a slider’s value externally, the light blue LED meter to the left of each slider shows the modulation in real time.\_"
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - ug_polySuperEnvGen_Dslider-1593216535.jpg
        alignment: left
        add_shadow: false
  -
    type: paragraph
    content:
      -
        type: text
        text: 'It is important to understand that the sliders themselves only show the initial value before any modulation. The blue LED meter displays the actual current setting being used for each stage of the envelope.'
  -
    type: heading
    attrs:
      level: '2'
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Attack, Decay, and Release Curves'
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - ug_SuperEnvGen_ADRcurve-1593216542.jpg
        alignment: left
        add_shadow: false
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The shape, or curve, of the '
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
        text: " stages of the envelope can be adjusted individually. Each stage has its own curve control which can morph smoothly from logarithmic, to linear, to exponential.\_"
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
                text: 'A logarithmic curve will move quickly at first, then slower as it approaches its destination (as shown in the '
              -
                type: text
                marks:
                  -
                    type: italic
                text: Decay
              -
                type: text
                text: ' and '
              -
                type: text
                marks:
                  -
                    type: italic
                text: Release
              -
                type: text
                text: ' '
              -
                type: text
                marks:
                  -
                    type: italic
                text: 'Curve '
              -
                type: text
                text: 'displays above).'
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'A linear curve moves towards the destination voltage at a constant pace.'
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'An exponential curve will move slowly at first, then quickly “ramp up” as it approaches its destination (as shown in the '
              -
                type: text
                marks:
                  -
                    type: italic
                text: 'Attack Curve'
              -
                type: text
                text: ' display above).'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The shape of each curve can be CV-controlled using its respective '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Curve CV'
      -
        type: text
        text: ' jack and bipolar attenuator and all modulations will be visually displayed in real time.'
  -
    type: heading
    attrs:
      level: '2'
    content:
      -
        type: text
        text: Input
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - ug_superEnvGen_gateIn.jpg
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
        text: 'Gate In jack'
      -
        type: text
        text: '- A gate signal received at this jack triggers the envelope to start when in '
      -
        type: text
        marks:
          -
            type: italic
        text: Normal
      -
        type: text
        text: ' or '
      -
        type: text
        marks:
          -
            type: italic
        text: 'One Shot'
      -
        type: text
        text: ' mode.'
  -
    type: heading
    attrs:
      level: '2'
    content:
      -
        type: text
        text: Multiplier
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - ug_polySuperEnvGen_multiplier-1593216612.jpg
        alignment: left
        add_shadow: false
  -
    type: paragraph
    content:
      -
        type: text
        text: "These buttons multiply all of the slider’s timed values by one, five, or ten making it possible to have seriously long envelope shapes!\_ As an example, if the "
      -
        type: text
        marks:
          -
            type: italic
        text: Decay
      -
        type: text
        text: ' slider is set to 1000ms (1 second) with the '
      -
        type: text
        marks:
          -
            type: italic
        text: x1
      -
        type: text
        text: ' button selected, the decay length will be 5 seconds or 10 seconds with the '
      -
        type: text
        marks:
          -
            type: italic
        text: x5
      -
        type: text
        text: ' or '
      -
        type: text
        marks:
          -
            type: italic
        text: x10
      -
        type: text
        text: ' buttons selected respectively.'
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
                text: 'Note that these buttons have no effect on the Sustain slider as it is not a time based stage.'
  -
    type: heading
    attrs:
      level: '2'
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Segment Mode'
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - ug_superEnvGen_segMode.jpg
        alignment: left
        add_shadow: false
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The Super Envelope Generator can be used in three different modes.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: Norm
      -
        type: text
        text: '- This is the normal envelope behavior where when a gate signal is received, the envelope starts at the '
      -
        type: text
        marks:
          -
            type: italic
        text: Delay
      -
        type: text
        text: ' stage, moves to the '
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
        text: Hold
      -
        type: text
        text: ' and '
      -
        type: text
        marks:
          -
            type: italic
        text: Decay
      -
        type: text
        text: ' stages, sustains at the '
      -
        type: text
        marks:
          -
            type: italic
        text: Sustain
      -
        type: text
        text: ' level, then starts the '
      -
        type: text
        marks:
          -
            type: italic
        text: Release
      -
        type: text
        text: ' stage when the gate stops.'
      -
        type: hard_break
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: Loop
      -
        type: text
        text: '- Pressing this button loops the first four stages (DAHD) continuously making the envelope behave more like an LFO. As soon as the button is pressed, the envelope starts at the '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Delay '
      -
        type: text
        text: 'stage, moves to the '
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
        text: Hold
      -
        type: text
        text: ' and '
      -
        type: text
        marks:
          -
            type: italic
        text: Decay
      -
        type: text
        text: ' stages, then loops back to the '
      -
        type: text
        marks:
          -
            type: italic
        text: Delay
      -
        type: text
        text: ' stage to start over again. The '
      -
        type: text
        marks:
          -
            type: italic
        text: Sustain
      -
        type: text
        text: ' and '
      -
        type: text
        marks:
          -
            type: italic
        text: Release
      -
        type: text
        text: ' stages are not used at all in this mode, therefore the '
      -
        type: text
        marks:
          -
            type: italic
        text: Decay
      -
        type: text
        text: " stage will always return to 0V before looping back to the beginning.\_\_"
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'One Shot'
      -
        type: text
        text: '- This mode also only uses the first four stages (DAHD) of the envelope. Each time a gate signal is received at the '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Gate In'
      -
        type: text
        text: ' jack, the envelope starts at the '
      -
        type: text
        marks:
          -
            type: italic
        text: Delay
      -
        type: text
        text: ' stage, moves to the '
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
        text: Hold
      -
        type: text
        text: ' and '
      -
        type: text
        marks:
          -
            type: italic
        text: Decay
      -
        type: text
        text: ' stages and then stops. All four stages will be completed regardless of how long the gate signal is held. Note that since the '
      -
        type: text
        marks:
          -
            type: italic
        text: Sustain
      -
        type: text
        text: ' stage is inactive, the '
      -
        type: text
        marks:
          -
            type: italic
        text: Decay
      -
        type: text
        text: ' stage returns all the way back to 0V.'
  -
    type: heading
    attrs:
      level: '2'
    content:
      -
        type: text
        text: Outputs
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - ug_superEnvGen_envOuts.jpg
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
        text: 'Env Out and Env Out Inv'
      -
        type: text
        text: '- These are the envelope poly voltage outputs. The jack on the right has a positive voltage output of  0V to +5V; the jack on the left has an inverted negative voltage output of 0V to -5V.'
template: modules
seo:
  description: 'The Super Envelope Generator is a full-featured DAHDSR envelope (Delay-Attack-Hold-Decay-Sustain-Release). The shapes of the attack, decay, and release stages are individually controllable, morphing from exponential to linear to logarithmic, and these shapes can all be modulated via control voltage. On top of that, the length of each stage and the sustain level is CV-controllable as well!\_'
  image: /assets/social-modules/super-envelope-generator.png
slug: super-envelope-generator
blueprint: modules
categories: envelope-generators
updated_at: 1593216844
updated_by: a0ce54e0-bf71-4d4c-a5b9-7182705c1bfa
id: b6baea45-dbcb-41f3-b1d6-d786bc229739
---
