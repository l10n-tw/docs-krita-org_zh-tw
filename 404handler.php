<?php

// This script is intended to handle requests for files that do not exist
// This may occur because:
// 1) It is a language-free URL and we need to send the user to the most language appropriate version for them
// 2) The page has moved elsewhere and we need to send them to the appropriate page
// 3) The request is for a legacy page that existed on the older Mediawiki based setup, in which case we need to once again send them to the most appropriate page

// Our list of supported languages
$supported_languages = array(
    "ca",
    "en",
    "fr",
    "it",
    "ja",
    "ko",
    "nl",
    "pl",
    "pt_PT",
    "uk_UA",
    "zh_CN"
);

// List of page redirect rules
// These should always be free of the language code, as this will be automatically added on when formulating the URL to forward the user on to
$redirect_rules = array(
    // Default front page
    "^$" => "index.html",

    // Old mediawiki pages redirects.
    "^Main_Page" => "index.html",
    "^KritaFAQ$" => "KritaFAQ.html",
    "^Contributors_Readme" => "contributors_manual/krita_manual_readme.html",
    "^Resources" => "resources_page.html",

    // User Manual
    "^Category:User_Manual" => "user_manual.html",
    "^Drawing_Tablets" => "user_manual/drawing_tablets.html",
    "^Loading_and_Saving_Brushes" => "user_manual/loading_saving_brushes.html",
    "^On_Canvas_Brush_Editor" => "user_manual/oncanvas_brush_editor.html",
    "^Mirror_Tools" => "user_manual/mirror_tools.html",
    "^Painting_With_Assistants" => "user_manual/painting_with_assistants.html",
    "^Working_with_Images" => "user_manual/working_with_images.html",
    "^Templates" => "user_manual/templates.html",
    "^Introduction_to_Layers_and_Masks" => "user_manual/layers_and_masks.html",
    "^Selections" => "user_manual/selections.html",
    "^Tag_System" => "user_manual/tag_management.html",
    "^Soft_Proofing" => "user_manual/soft_proofing.html",
    "^Vector_Graphics" => "user_manual/vector_graphics.html",
    "^Snapping" => "user_manual/snapping.html",
    "^Animation" => "user_manual/animation.html",
    "^Japanese_Animation_Template_for_Krita" => "user_manual/japanese_animation_template.html",

    // Getting started
    "^Category:Getting_Started" => "user_manual/getting_started.html",
    "^Installation" => "user_manual/getting_started/installation.html",
    "^Starting_Krita" => "user_manual/getting_started/starting_krita.html",
    "^Basic_Concepts" => "user_manual/getting_started/basic_concepts.html",
    "^Navigation" => "user_manual/getting_started/navigation.html",

    // Introduction
    "^Category:Introduction_coming_from_other_software" => "user_manual/introduction_from_other_software.html",
    "^Introduction_to_Krita_coming_from_Photoshop" => "user_manual/introduction_from_other_software/introduction_from_photoshop.html",
    "^Introduction_to_Krita_coming_from_Painttool_Sai" => "user_manual/introduction_from_other_software/introduction_from_sai.html",

    // Python Scripting
    "^Category:Python_Scripting" => "user_manual/python_scripting.html",
    "^Introduction_to_Python_Scripting" => "user_manual/python_scripting/introduction_to_python_scripting.html",
    "^How_to_make_a_Krita_Python_plugin" => "user_manual/python_scripting/krita_python_plugin_howto.html",

    // Reference Manual
    "^Category:Reference_Manual" => "reference_manual.html",
    "^Blending_Modes" => "reference_manual/blending_modes.html",
    "^Dr._Mingw_debugger" => "reference_manual/dr_minw_debugger.html",
    "^Instant_Preview" => "reference_manual/instant_preview.html",
    "^The_Krita_4_Preset_Bundle" => "reference_manual/krita_4_preset_bundle.html",
    "^Linux_Command_Line" => "reference_manual/linux_command_line.html",
    "^List_of_Tablets_Supported" => "reference_manual/list_supported_tablets.html",
    "^Maths_input" => "reference_manual/maths_input.html",
    "^Render_Animation" => "reference_manual/render_animation.html",
    "^Stroke_Selection" => "reference_manual/stroke_selection.html",

    // Brushes
    "^Category:Brushes" => "reference_manual/brushes.html",
    "^Category:Brush_Engines" => "reference_manual/brushes/brush_engines.html",

    "^Bristle" => "reference_manual/brushes/brush_engines/bristle_engine.html",
    "^Chalk" => "reference_manual/brushes/brush_engines/chalk_engine.html",
    "^Clone" => "reference_manual/brushes/brush_engines/clone_engine.html",
    "^Color_Smudge" => "reference_manual/brushes/brush_engines/color_smudge_engine.html",
    "^Curve" => "reference_manual/brushes/brush_engines/curve_engine.html",
    "^Deform" => "reference_manual/brushes/brush_engines/deform_brush_engine.html",
    "^Dyna" => "reference_manual/brushes/brush_engines/dyna_brush_engine.html",
    "^Filter" => "reference_manual/brushes/brush_engines/filter_brush_engine.html",
    "^Grid" => "reference_manual/brushes/brush_engines/grid_brush_engine.html",
    "^Hatching" => "reference_manual/brushes/brush_engines/hatching_brush_engine.html",
    "^Particle" => "reference_manual/brushes/brush_engines/particle_brush_engine.html",
    "^Pixel" => "reference_manual/brushes/brush_engines/pixel_brush_engine.html",
    "^Quick_Brush" => "reference_manual/brushes/brush_engines/quick_brush_engine.html",
    "^Shape" => "reference_manual/brushes/brush_engines/shape_brush_engine.html",
    "^Sketch" => "reference_manual/brushes/brush_engines/sketch_brush_engine.html",
    "^Spray" => "reference_manual/brushes/brush_engines/spray_brush_engine.html",
    "^Tangent_Normal" => "reference_manual/brushes/brush_engines/tangen_normal_brush_engine.html",

    // Brush Settings
    "^Category:Brush_Settings" => "reference_manual/brushes/brush_settings.html",
    "^Brush_Tips" => "reference_manual/brushes/brush_settings/brush_tips.html",
    "^Locked_Brush_Settings" => "reference_manual/brushes/brush_settings/locked_brush_settings.html",
    "^Masked_Brush" => "reference_manual/brushes/brush_settings/masked_brush.html",
    "^Opacity_&_Flow" => "reference_manual/brushes/brush_settings/opacity_and_flow.html",
    "^Parameters" => "reference_manual/brushes/brush_settings/options.html",
    "^Sensors" => "reference_manual/brushes/brush_settings/tablet_sensors.html",
    "^Texture" => "reference_manual/brushes/brush_settings/texture.html",

    // Dockers
    "^Category:Dockers" => "reference_manual/dockers.html",

    "^Add_Shape" => "reference_manual/dockers/add_shape.html",
    "^Advanced_Color_Selector" => "reference_manual/dockers/advanced_color_selector.html",
    "^Animation_Curves" => "reference_manual/dockers/animation_curves.html",
    "^Animation_Docker" => "reference_manual/dockers/animation_docker.html",
    "^Artistic_Color_Selector" => "reference_manual/dockers/artistic_color_selector.html",
    "^Brush_Presets" => "reference_manual/dockers/brush_preset_docker.html",
    "^Channels" => "reference_manual/dockers/channels_docker.html",
    "^Color_Sliders" => "reference_manual/dockers/color_sliders.html",
    "^Compositions" => "reference_manual/dockers/compositions.html",
    "^Digital_Color_Mixer" => "reference_manual/dockers/digital_color_mixer.html",
    "^Grids_and_Guides" => "reference_manual/dockers/grids_and_guides.html",
    "^Histogram" => "reference_manual/dockers/histogram_docker.html",
    "^Layers" => "reference_manual/dockers/layers.html",
    "^LUT_Management" => "reference_manual/dockers/lut_management.html",
    "^Onion_Skin_Docker" => "reference_manual/dockers/onion_skin.html",
    "^Overview" => "reference_manual/dockers/overview.html",
    "^Palette" => "reference_manual/dockers/palette_docker.html",
    "^Patterns" => "reference_manual/dockers/pattern_docker.html",
    "^Reference_Images" => "reference_manual/dockers/reference_images_docker.html",
    "^Shape_Properties" => "reference_manual/dockers/shape_properties_docker.html",
    "^Small_Color_Selector" => "reference_manual/dockers/small_color_selector.html",
    "^Snap_Settings" => "reference_manual/dockers/snap_settings_docker.html",
    "^Specific_Color_Selector" => "reference_manual/dockers/specific_color_selector.html",
    "^Task_Sets" => "reference_manual/dockers/task_sets.html",
    "^Timeline_Docker" => "reference_manual/dockers/animation_timeline.html",
    "^Touch_Docker" => "reference_manual/dockers/touch_docker.html",
    "^Undo_History" => "reference_manual/dockers/undo_history.html",
    "^Vector_Library_Docker" => "reference_manual/dockers/vector_library.html",

    // Filters
    "^Category:Filters" => "reference_manual/filters.html",
    "^Adjust" => "reference_manual/filters/adjust.html",
    "^Artistic" => "reference_manual/filters/artistic.html",
    "^Blur" => "reference_manual/filters/blur.html",
    "^Colors" => "reference_manual/filters/colors.html",
    "^Edge_Detection" => "reference_manual/filters/edge_detection.html",
    "^Emboss" => "reference_manual/filters/emboss.html",
    "^Enhance" => "reference_manual/filters/enhance.html",
    "^Map" => "reference_manual/filters/map.html",
    "^Other_filters" => "reference_manual/filters/other.html",
    "^Wavelet_decompose" => "reference_manual/filters/wavelet_decompose.html",

    // Layers
    "^Category:Layers_and_Masks" => "reference_manual/layers_and_masks.html",
    "^Clone_layers" => "reference_manual/layers_and_masks/clone_layers.html",
    "^File_Layers" => "reference_manual/layers_and_masks/file_layers.html",
    "^Fill_Layers" => "reference_manual/layers_and_masks/fill_layers.html",
    "^Filter_Layers" => "reference_manual/layers_and_masks/filter_layers.html",
    "^Filter_Masks" => "reference_manual/layers_and_masks/filter_masks.html",
    "^Group_Layers" => "reference_manual/layers_and_masks/group_layers.html",
    "^Layer_Styles" => "reference_manual/layers_and_masks/layer_styles.html",
    "^Paint_Layers" => "reference_manual/layers_and_masks/paint_layers.html",
    "^Local_Selection_Masks" => "reference_manual/layers_and_masks/selection_masks.html",
    "^Transformation_Masks" => "reference_manual/layers_and_masks/transformation_masks.html",
    "^Transparency_Masks" => "reference_manual/layers_and_masks/transparency_masks.html",
    "^Vector_Layers" => "reference_manual/layers_and_masks/vector_layers.html",

    // Menu
    "^Category:Main_Menu" => "reference_manual/main_menu.html",
    "^Edit_Menu" => "reference_manual/main_menu/edit_menu.html",
    "^File_Menu" => "reference_manual/main_menu/file_menu.html",
    "^Help_Menu" => "reference_manual/main_menu/help_menu.html",
    "^Image_Menu" => "reference_manual/main_menu/image_menu.html",
    "^Layer_Menu" => "reference_manual/main_menu/layers_menu.html",
    "^Select_Menu" => "reference_manual/main_menu/select_menu.html",
    "^Settings_Menu" => "reference_manual/main_menu/settings_menu.html",
    "^Tools_Menu" => "reference_manual/main_menu/tools_menu.html",
    "^View_Menu" => "reference_manual/main_menu/view_menu.html",
    "^Window_Menu" => "reference_manual/main_menu/window_menu.html",

    // Preferences
    "^Category:Preferences" => "reference_manual/preferences.html",
    "^Author_Settings" => "reference_manual/preferences/author_settings.html",
    "^Canvas_Input_Settings" => "reference_manual/preferences/canvas_input_settings.html",
    "^Canvas-only_Settings" => "reference_manual/preferences/canvas_only_mode.html",
    "^Color_Management_Settings" => "reference_manual/preferences/color_management_settings.html",
    "^Color_Selector_Settings" => "reference_manual/preferences/color_selector_settings.html",
    "^Display_Settings" => "reference_manual/preferences/display_settings.html",
    "^GMIC_filter_plugin" => "reference_manual/preferences/g_mic_settings.html",
    "^General_Settings" => "reference_manual/preferences/general_settings.html",
    "^Grid_Settings" => "reference_manual/preferences/grid_settings.html",
    "^Performance_Settings" => "reference_manual/preferences/performance_settings.html",
    "^Python_Plugin_Manager" => "reference_manual/preferences/python_plugin_manager.html",
    "^Shortcuts" => "reference_manual/preferences/shortcut_settings.html",
    "^Tablet_Settings" => "reference_manual/preferences/tablet_settings.html",

    // Resources
    "^Category:Resource_Management" => "reference_manual/resource_management.html",
    "^Managing_Brush_Presets" => "reference_manual/resource_management/paintoppresets.html",
    "^Managing_Brush_Tips" => "reference_manual/resource_management/resource_brushtips.html",
    "^Managing_Gradients" => "reference_manual/resource_management/resource_gradients.html",
    "^Managing_Patterns" => "reference_manual/resource_management/resource_patterns.html",
    "^Managing_Workspaces" => "reference_manual/resource_management/resource_workspace.html",

    // Tools
    "^Category:Toolbox" => "reference_manual/tools.html",
    "^Shape_Selection_Tool" => "reference_manual/tools/shape_selection.html",
    "^Shape_Handling_Tool" => "reference_manual/tools/shape_selection.html",
    "^Edit_Shapes_Tool" => "reference_manual/tools/shape_edit.html",
    "^Text_Tool" => "reference_manual/tools/text.html",
    "^Gradient_Editing_Tool" => "reference_manual/tools/gradient_edit.html",
    "^Pattern_Editing_Tool" => "reference_manual/tools/pattern_edit.html",
    "^Calligraphy" => "reference_manual/tools/calligraphy.html",
    "^Freehand_Brush_Tool" => "reference_manual/tools/freehand_brush.html",
    "^Straight_Line_Tool" => "reference_manual/tools/line.html",
    "^Rectangle_Tool" => "reference_manual/tools/rectangle.html",
    "^Ellipse_Tool" => "reference_manual/tools/ellipse.html",
    "^Polygon_Tool" => "reference_manual/tools/polygon.html",
    "^Polyline_Tool" => "reference_manual/tools/polyline.html",
    "^Path_Tool" => "reference_manual/tools/path.html",
    "^Freehand_Path_Tool" => "reference_manual/tools/freehand_path.html",
    "^Dynamic_Brush_Tool" => "reference_manual/tools/dyna.html",
    "^Multibrush_Tool" => "reference_manual/tools/multibrush.html",
    "^Crop_Tool" => "reference_manual/tools/crop.html",
    "^Move_Tool" => "reference_manual/tools/move.html",
    "^Transform_Tool" => "reference_manual/tools/transform.html",
    "^Measure_Tool" => "reference_manual/tools/measure.html",
    "^Fill_Tool" => "reference_manual/tools/fill.html",
    "^Gradient_Tool" => "reference_manual/tools/gradient_draw.html",
    "^Color_Selector_Tool" => "reference_manual/tools/color_sampler.html",
    "^Colorize_Mask" => "reference_manual/tools/colorize_mask.html",
    "^Lazy_Brush" => "reference_manual/tools/colorize_mask.html",
    "^Grid_Tool" => "reference_manual/tools/grid_tool.html",
    "^Perspective_Grid_Tool" => "reference_manual/tools/perspective_grid.html",
    "^Smart_Patch_Tool" => "reference_manual/tools/smart_patch.html",
    "^Assistant_Tool" => "reference_manual/tools/assistant.html",
    "^Rectangular_Selection_Tool" => "reference_manual/tools/rectangular_select.html",
    "^Elliptical_Selection_Tool" => "reference_manual/tools/elliptical_select.html",
    "^Outline_Selection_Tool" => "reference_manual/tools/freehand_select.html",
    "^Polygonal_Selection_Tool" => "reference_manual/tools/polygonal_select.html",
    "^Contiguous_Selection_Tool" => "reference_manual/tools/contiguous_select.html",
    "^Bezier_Curve_Selection_Tool" => "reference_manual/tools/path_select.html",
    "^Similar_Color_Selection_Tool" => "reference_manual/tools/similar_select.html",
    "^Zoom_Tool" => "reference_manual/tools/zoom.html",
    "^Pan_Tool" => "reference_manual/tools/pan.html",

    // General Concepts
    "^Category:General_Concepts" => "general_concepts.html",

    // Color
    "^Category:Color" => "general_concepts/colors.html",
    "^Bit_Depth" => "general_concepts/colors/bit_depth.html",
    "^Color_Managed_Workflow" => "general_concepts/colors/color_managed_workflow.html",
    "^Mixing_Colors" => "general_concepts/colors/color_mixing.html",
    "^Color_Models" => "general_concepts/colors/color_models.html",
    "^Color_space_size" => "general_concepts/colors/color_space_size.html",
    "^Gamma_and_Linear" => "general_concepts/colors/linear_and_gamma.html",
    "^Profiling_and_Calibration" => "general_concepts/colors/profiling_and_callibration.html",
    "^Scene_Linear_Painting" => "general_concepts/colors/scene_linear_painting.html",
    "^Viewing_Conditions" => "general_concepts/colors/viewing_conditions.html",

    // File Formats
    "^Category:File_Formats" => "general_concepts/file_formats.html",
    "^\*.bmp" => "general_concepts/file_formats/file_bmp.html",
    "^\*.csv" => "general_concepts/file_formats/file_csv.html",
    "^\*.exr" => "general_concepts/file_formats/file_exr.html",
    "^\*.gbr" => "general_concepts/file_formats/file_gbr.html",
    "^\*.gif" => "general_concepts/file_formats/file_gif.html",
    "^\*.gih" => "general_concepts/file_formats/file_gih.html",
    "^\*.jpg" => "general_concepts/file_formats/file_jpeg.html",
    "^\*.kpl" => "general_concepts/file_formats/file_kpl.html",
    "^\*.kra" => "general_concepts/file_formats/file_kra.html",
    "^\*.ora" => "general_concepts/file_formats/file_ora.html",
    "^\*.pbm" => "general_concepts/file_formats/file_pbgpm.html",
    "^\*.pgm" => "general_concepts/file_formats/file_pbgpm.html",
    "^\*.ppm" => "general_concepts/file_formats/file_pbgpm.html",
    "^\*.pdf" => "general_concepts/file_formats/file_pdf.html",
    "^\*.png" => "general_concepts/file_formats/file_png.html",
    "^\*.psd" => "general_concepts/file_formats/file_psd.html",
    "^\*.svg" => "general_concepts/file_formats/file_svg.html",
    "^\*.tiff" => "general_concepts/file_formats/file_tif.html",

    // Projection
    "^Category:Projection" => "general_concepts/projection.html",
    "^Projection:_Orthographic_and_Oblique" => "general_concepts/projection/orthographic_oblique.html",
    "^Projection:_Axonometric" => "general_concepts/projection/axonometric.html",
    "^Projection:_Perspective" => "general_concepts/projection/perspective.html",
    "^Projection:_Practical_Uses" => "general_concepts/projection/practical.html",

    // Tutorials
    "^Category:Tutorials" => "tutorials.html",
    "^Clipping_Masks_and_Alpha_Inheritance" => "tutorials/clipping_masks_and_alpha_inheritance.html",
    "^Common-workflows" => "tutorials/common_workflows.html",
    "^Flat_Coloring" => "tutorials/flat-coloring.html",
    "^Inking" => "tutorials/inking.html",
    "^Saving_for_the_Web" => "tutorials/saving-for-the-web.html",
    "^Making_an_Azalea_with_the_transformation_masks" => "tutorials/making_an_azalea_with_the_transformation_masks.html",

    // External_Training_and_Tutorials
    "^Brush-tips:Animated_Brush" => "tutorials/krita-brush-tips/animated_brushes.html",
    "^Brush-tips:Bokeh" => "tutorials/krita-brush-tips/bokeh-brush.html",
    "^Brush-tips:Caustics" => "tutorials/krita-brush-tips/caustics.html",
    "^Brush-tips:Fur" => "tutorials/krita-brush-tips/fur.html",
    "^Brush-tips:Hair" => "tutorials/krita-brush-tips/hair.html",
    "^Brush-tips:Outline" => "tutorials/krita-brush-tips/outline.html",
    "^Brush-tips:Rainbow_Brush" => "tutorials/krita-brush-tips/rainbow-brush.html",
    "^Brush-tips:Sculpt-paint-brush" => "tutorials/krita-brush-tips/sculpt-paint-brush.html",

    // New, non-mediawiki redirects...

    "^reference_manual/dockers/timeline.html" => "reference_manual/dockers/animation_timeline.html",
    "^reference_manual/dockers/animation_curve.html" => "reference_manual/dockers/animation_curves.html",
    // Redirect animation docker to timeline docker when we finally remove it.
    // "^reference_manual/dockers/animation_docker.html" => "reference_manual/dockers/animation_timeline.html",
    "^reference_manual/tools/color_selector.html" => "reference_manual/tools/color_sampler.html"
);

//// SETTINGS END
//// CHANGES SHOULD NOT BE NEEDED TO THE BELOW

// Helper function to determine the most appropriate language for the user
// Parameters:
// $request              The web path that the user is trying to reach
// $browser_languages    The languages accepted by the user browser, in Accept-Language format
// $supported_languages  Array of languages that we support - in ISO language code format
function determine_appropriate_language( $request, $browser_languages, $supported_languages )
{
    // First we start by looking at the request we have received
    // If this contains a language code, then we should be using that as the user has chosen to use that language explicitly
    // We assume that this language is supported
    if( preg_match( '/^([a-z][a-z](_[A-Z][A-Z])?)\//', $request, $result ) ) {
        // Then the user has specified a language - let's use that!
        return $result[1];
    }

    // Now that we know that the URL has not specified a language we can move on to looking at Accept-Language
    // First split the list up by the language separator
    $browser_requested_languages = explode( ",", $browser_languages );

    // Now go through each browser requested language in turn
    foreach( $browser_requested_languages as $language ) {
        // First as this might have a weighting value on it, we need to rip that off
        // Safest way to do this is just to split again by the appropriate separator for that
        $components = explode(";", $language);
        $language = $components[0];

        // Browsers use dashes to seperate language variants
        // But KDE translation systems use underscores for this so ensure we are consistent here
        $language = str_replace("-", "_", $language);

        // Is this one of our supported languages?
        if( in_array($language, $supported_languages) ) {
            // Then we have a winner!
            return $language;
        }
    }

    // Finally if we found nothing we fallback to English
    return 'en';
}

// Start - Retrieve the values we need to work with here
$requested_url = $_SERVER['REQUEST_URI'];
$requested_languages = $_SERVER["HTTP_ACCEPT_LANGUAGE"];

// Before we can do anything else we need to clean up the URL we have received to remove the leading slash
$requested_url = substr($requested_url, 1);

// Now determine the language we should be sending the user to
$language = determine_appropriate_language( $requested_url, $requested_languages, $supported_languages );

// Split out the content part of the URL
// We will need this for the matching we are about to do above
if( !preg_match( '/^([a-z][a-z](_[A-Z][A-Z])?\/)?(.*)/', $requested_url, $result ) ) {
    // This shouldn't happen...
    // But in case it does, serve a 404 and bail
    http_response_code(404);
    include("../$language/404.html");
    exit();
}

// Save our result...
$requested_page = $result[3];

// First do a local check and see if $language/$requested_page exists..
// This allows for urls such as https://docs.krita.org/user_manual/getting_started/starting_krita.html to work
if( file_exists("../$language/$requested_page") ) {
    // Then redirect them there
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: /$language/$requested_page");
    exit();
}

// Go across all of our redirect rules now and see if we have any matches
foreach( $redirect_rules as $rule => $replacement ) {
    // Try to match it...
    if( !preg_match( "/$rule/", $requested_page, $result ) ) {
        // Then we need to try another one...
        continue;
    }

    // We have a winner!
    // Perform the redirect
    header("HTTP/1.1 301 Moved Permanently"); 
    header("Location: /$language/$replacement"); 
    exit();
}

// Alas it looks like we have no match :(
// Send a 404
http_response_code(404);
include("../$language/404.html");
exit();

?>
