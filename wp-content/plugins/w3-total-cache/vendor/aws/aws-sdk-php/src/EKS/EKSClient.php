<?php
namespace Aws\EKS;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Elastic Container Service for Kubernetes** service.
 * @method \Aws\Result associateEncryptionConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateEncryptionConfigAsync(array $args = [])
 * @method \Aws\Result associateIdentityProviderConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateIdentityProviderConfigAsync(array $args = [])
 * @method \Aws\Result createAddon(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAddonAsync(array $args = [])
 * @method \Aws\Result createCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterAsync(array $args = [])
 * @method \Aws\Result createFargateProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFargateProfileAsync(array $args = [])
 * @method \Aws\Result createNodegroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNodegroupAsync(array $args = [])
 * @method \Aws\Result deleteAddon(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAddonAsync(array $args = [])
 * @method \Aws\Result deleteCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteClusterAsync(array $args = [])
 * @method \Aws\Result deleteFargateProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFargateProfileAsync(array $args = [])
 * @method \Aws\Result deleteNodegroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNodegroupAsync(array $args = [])
 * @method \Aws\Result describeAddon(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAddonAsync(array $args = [])
 * @method \Aws\Result describeAddonVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAddonVersionsAsync(array $args = [])
 * @method \Aws\Result describeCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterAsync(array $args = [])
 * @method \Aws\Result describeFargateProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFargateProfileAsync(array $args = [])
 * @method \Aws\Result describeIdentityProviderConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIdentityProviderConfigAsync(array $args = [])
 * @method \Aws\Result describeNodegroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNodegroupAsync(array $args = [])
 * @method \Aws\Result describeUpdate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUpdateAsync(array $args = [])
 * @method \Aws\Result disassociateIdentityProviderConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateIdentityProviderConfigAsync(array $args = [])
 * @method \Aws\Result listAddons(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAddonsAsync(array $args = [])
 * @method \Aws\Result listClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listClustersAsync(array $args = [])
 * @method \Aws\Result listFargateProfiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFargateProfilesAsync(array $args = [])
 * @method \Aws\Result listIdentityProviderConfigs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIdentityProviderConfigsAsync(array $args = [])
 * @method \Aws\Result listNodegroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listNodegroupsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result listUpdates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUpdatesAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateAddon(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAddonAsync(array $args = [])
 * @method \Aws\Result updateClusterConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateClusterConfigAsync(array $args = [])
 * @method \Aws\Result updateClusterVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateClusterVersionAsync(array $args = [])
 * @method \Aws\Result updateNodegroupConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateNodegroupConfigAsync(array $args = [])
 * @method \Aws\Result updateNodegroupVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateNodegroupVersionAsync(array $args = [])
 */
class EKSClient extends AwsClient {}
