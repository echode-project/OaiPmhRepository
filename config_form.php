<?php 
/**
 * Config form include
 *
 * Included in the configuration page for the plugin to change settings.
 *
 * @package OaiPmhRepository
 * @author John Flatness, Yu-Hsun Lin
 * @copyright Copyright 2009-2014 John Flatness, Yu-Hsun Lin
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 */
?>

<div class="field">
    <div class="two columns alpha">
        <label for="oaipmh_repository_name">Repository name</label>
    </div>
    <div class="inputs five columns omega">
        <p class="explanation">Name for this OAI-PMH repository.</p>
        <?php echo get_view()->formText('oaipmh_repository_name', $repoName);?>
    </div>
</div>
<div class="field">
    <div class="two columns alpha">
        <label for="oaipmh_repository_namespace_id">Namespace identifier</label>
    </div>
    <div class="inputs five columns omega">
        <p class="explanation">This will be used to form
        globally unique IDs for the exposed metadata items.  This value is required
        to be a domain name you have registered.  Using other values will generate
        invalid identifiers.</p>
        <?php echo get_view()->formText('oaipmh_repository_namespace_id', $namespaceID);?>
    </div>
</div>
<div class="field">
    <div class="two columns alpha">
        <label for="oaipmh_repository_expose_files">Expose files</label>
    </div>
    <div class="inputs five columns omega">
        <p class="explanation">Whether the plugin should include identifiers for the
        files associated with items.  This provides harvesters with direct access to
        files.</p>
        <?php echo get_view()->formCheckbox('oaipmh_repository_expose_files', $exposeFiles, null, 
            array('checked' => '1', 'unChecked' => '0'));?>
    </div>
</div>
<div class="field">
    <div class="two columns alpha">
        <?php echo $view->formLabel('oaipmh_repository_expose_empty_collections',
            __('Expose empty collections')); ?>
    </div>
    <div class='inputs five columns omega'>
        <?php echo get_view()->formCheckbox('oaipmh_repository_expose_empty_collections', true,
            array('checked' => (boolean) get_option('oaipmh_repository_expose_empty_collections'))); ?>
        <p class="explanation">
            <?php echo __('Whether the plugin should expose empty public collections.'); ?>
        </p>
    </div>
</div>
