<?php
namespace Aws\IoTSiteWise;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS IoT SiteWise** service.
 * @method \Aws\Result associateAssets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateAssetsAsync(array $args = [])
 * @method \Aws\Result batchAssociateProjectAssets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchAssociateProjectAssetsAsync(array $args = [])
 * @method \Aws\Result batchDisassociateProjectAssets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDisassociateProjectAssetsAsync(array $args = [])
 * @method \Aws\Result batchPutAssetPropertyValue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchPutAssetPropertyValueAsync(array $args = [])
 * @method \Aws\Result createAccessPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccessPolicyAsync(array $args = [])
 * @method \Aws\Result createAsset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAssetAsync(array $args = [])
 * @method \Aws\Result createAssetModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAssetModelAsync(array $args = [])
 * @method \Aws\Result createDashboard(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDashboardAsync(array $args = [])
 * @method \Aws\Result createGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGatewayAsync(array $args = [])
 * @method \Aws\Result createPortal(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPortalAsync(array $args = [])
 * @method \Aws\Result createProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProjectAsync(array $args = [])
 * @method \Aws\Result deleteAccessPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccessPolicyAsync(array $args = [])
 * @method \Aws\Result deleteAsset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAssetAsync(array $args = [])
 * @method \Aws\Result deleteAssetModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAssetModelAsync(array $args = [])
 * @method \Aws\Result deleteDashboard(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDashboardAsync(array $args = [])
 * @method \Aws\Result deleteGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGatewayAsync(array $args = [])
 * @method \Aws\Result deletePortal(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePortalAsync(array $args = [])
 * @method \Aws\Result deleteProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProjectAsync(array $args = [])
 * @method \Aws\Result describeAccessPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccessPolicyAsync(array $args = [])
 * @method \Aws\Result describeAsset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAssetAsync(array $args = [])
 * @method \Aws\Result describeAssetModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAssetModelAsync(array $args = [])
 * @method \Aws\Result describeAssetProperty(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAssetPropertyAsync(array $args = [])
 * @method \Aws\Result describeDashboard(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDashboardAsync(array $args = [])
 * @method \Aws\Result describeDefaultEncryptionConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDefaultEncryptionConfigurationAsync(array $args = [])
 * @method \Aws\Result describeGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGatewayAsync(array $args = [])
 * @method \Aws\Result describeGatewayCapabilityConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGatewayCapabilityConfigurationAsync(array $args = [])
 * @method \Aws\Result describeLoggingOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLoggingOptionsAsync(array $args = [])
 * @method \Aws\Result describePortal(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePortalAsync(array $args = [])
 * @method \Aws\Result describeProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProjectAsync(array $args = [])
 * @method \Aws\Result disassociateAssets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateAssetsAsync(array $args = [])
 * @method \Aws\Result getAssetPropertyAggregates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAssetPropertyAggregatesAsync(array $args = [])
 * @method \Aws\Result getAssetPropertyValue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAssetPropertyValueAsync(array $args = [])
 * @method \Aws\Result getAssetPropertyValueHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAssetPropertyValueHistoryAsync(array $args = [])
 * @method \Aws\Result getInterpolatedAssetPropertyValues(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInterpolatedAssetPropertyValuesAsync(array $args = [])
 * @method \Aws\Result listAccessPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccessPoliciesAsync(array $args = [])
 * @method \Aws\Result listAssetModels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssetModelsAsync(array $args = [])
 * @method \Aws\Result listAssetRelationships(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssetRelationshipsAsync(array $args = [])
 * @method \Aws\Result listAssets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssetsAsync(array $args = [])
 * @method \Aws\Result listAssociatedAssets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssociatedAssetsAsync(array $args = [])
 * @method \Aws\Result listDashboards(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDashboardsAsync(array $args = [])
 * @method \Aws\Result listGateways(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGatewaysAsync(array $args = [])
 * @method \Aws\Result listPortals(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPortalsAsync(array $args = [])
 * @method \Aws\Result listProjectAssets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProjectAssetsAsync(array $args = [])
 * @method \Aws\Result listProjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProjectsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result putDefaultEncryptionConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putDefaultEncryptionConfigurationAsync(array $args = [])
 * @method \Aws\Result putLoggingOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putLoggingOptionsAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateAccessPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAccessPolicyAsync(array $args = [])
 * @method \Aws\Result updateAsset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAssetAsync(array $args = [])
 * @method \Aws\Result updateAssetModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAssetModelAsync(array $args = [])
 * @method \Aws\Result updateAssetProperty(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAssetPropertyAsync(array $args = [])
 * @method \Aws\Result updateDashboard(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDashboardAsync(array $args = [])
 * @method \Aws\Result updateGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGatewayAsync(array $args = [])
 * @method \Aws\Result updateGatewayCapabilityConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGatewayCapabilityConfigurationAsync(array $args = [])
 * @method \Aws\Result updatePortal(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePortalAsync(array $args = [])
 * @method \Aws\Result updateProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProjectAsync(array $args = [])
 */
class IoTSiteWiseClient extends AwsClient {}
